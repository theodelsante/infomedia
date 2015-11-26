<?php
$list_content = Db::select($list_name, '*', null, array('date_creation' => 'DESC'));
echo '<table class="col-xs-12">';
if ($list_content == null) {
	echo '<thead><tr><th colspan="5" id="empty_list">Aucun produit</th></tr></thead>';
} else {
	echo '<thead><tr><th>'.$json['admin'][$list_name]['first'].'</th><th>'.$json['admin'][$list_name]['second'].'</th><th class="hidden-xs">'.$json['admin']['date_added'].'</th><th colspan="2"></th></tr></thead>
	<tbody>';
	foreach ($list_content as $value) {
		echo '<tr>';
		if (isset($value['name_'.$_SESSION['lang']])) {
			echo '<td>'.$value['name_'.$_SESSION['lang']].'</td>
			<td>'.$value['price'].'€</td>';
		} else if (isset($value['title_'.$_SESSION['lang']])) {
			if (strtotime(date('Y-m-d')) >= strtotime($value['date_publication'])) {
				$width = 50;
				if ($_SESSION['lang'] == 'en') {
					$width = 78;
				}
				echo '<td width="'.$width.'"><i class="fa fa-check"></i></td>';
			} else {
				echo '<td></td>';
			}
			echo '<td>'.$value['title_'.$_SESSION['lang']].'</td>';
		}
		echo '<td class="hidden-xs">'.date('d/m/Y', strtotime($value['date_creation'])).'</td>
		<td><a href="./?page='.$list_name.'&change&id='.$value['id'].'" class="btn btn-warning">'.$json['admin']['modify'].'</a></td>
		<td><a href="./?page='.$list_name.'&delete&id='.$value['id'].'" class="btn btn-danger">'.$json['admin']['delete'].'</a></td>
		</tr>';
	}
	echo '</tbody>';
}
echo '<tfoot>
<tr><td colspan="5"><a href="./?page='.$list_name.'&add" class="btn btn-success col-xs-6">'.$json['admin']['add'].'</a></td></tr>
</tfoot>
</table>';
?>