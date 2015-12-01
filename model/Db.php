<?
class Db {
	/**
	 * Select
	 * @return array $result
	*/
	public static function select($table, $selection = '*', $where = null, $order = null, $limit = null) {
		if( !empty($where) && is_array($where) ) {
			$whereString = ' WHERE';
			$first = true;
			foreach ($where as $key => $value) {
				if($first) {
					$whereString .= ' '.$key.'=\''.$value.'\'';
					$first = false;
				} else {
					$whereString .= ' AND '.$key.'=\''.$value.'\'';
				}
			}
		} else {
			$whereString = '';
		}

		if( !empty($order) && is_array($order) && ($order[key($order)] == 'ASC' || $order[key($order)] == 'DESC')) {
			$order = ' ORDER BY '.key($order).' '.$order[key($order)];
		} else {
			$order = '';
		}

		if( !empty($limit) && is_int($limit) ) {
			$limit = ' LIMIT '.$limit;
		} else {
			$limit = '';
		}
		
		$query = getDb()->query('SELECT '.$selection.' FROM '.$table.$whereString.$order.$limit);
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		$query->closeCursor();
		return $result;
	}

	/**
	 * Insert one or more rows in a table
	 * @return int $count
	*/
	public static function insert($table, $content, $row = null) {
		$keys = '';
		$values = '';
		if( !empty($row) && is_string($content)) {
			$keys = '`'.$row.'`';
			$values = '?';
			$content = array($content);
		} else if(is_array($content)) {
			$first = true;
			foreach ($content as $key => $value) {
				if( $value != '' ) {
					if($first) {
						$keys .= '`'.$key.'`';
						$values .= ':'.$key;
						$first = false;
					} else {
						$keys .= ', `'.$key.'`';
						$values .= ', :'.$key;
					}
				} else {
					unset($content[$key]);
				}
			}
		}
		$db = getDb();
		$query = $db->prepare('INSERT INTO '.$table.' ('.$keys.') VALUES ('.str_replace(CHR(13).CHR(10), '', $values).')');
		$query->execute($content);
		$count = $query->rowCount();
		$query->closeCursor();
		return $count > 0 ? $db->lastInsertId() : $count;
	}

	/**
	 * Update a cell of a table
	 * @return int $count
	*/
	public static function update($table, $row, $content, $id) {
		$query = getDb()->prepare('UPDATE '.$table.' SET `'.$row.'` = ? WHERE id = ?');
		$query->execute(array(str_replace(CHR(13).CHR(10), '', $content), $id));
		$count = $query->rowCount();
		$query->closeCursor();
		return $count;
	}

	/**
	 * Delete a row of a table
	 * @return int $count
	*/
	public static function delete($table, $id) {
		$query = getDb()->prepare('DELETE FROM '.$table.' WHERE id = ?;');
		$query->execute(array($id));
		$count = $query->rowCount();
		$query->closeCursor();
		return $count;
	}
}
?>