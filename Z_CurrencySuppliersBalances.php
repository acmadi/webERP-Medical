<?php
/* $Id$*/

include('includes/session.inc');
$title=_('Currency Debtor Balances');
include('includes/header.inc');

echo '<font size="4"><b>' . _('Suppliers Balances By Currency Totals') . '</b></font>';

$sql = "SELECT SUM(ovamount+ovgst-alloc) AS currencybalance,
		currcode,
		SUM((ovamount+ovgst-alloc)/rate) AS localbalance
		FROM supptrans INNER JOIN suppliers ON supptrans.supplierno=suppliers.supplierid
		WHERE (ovamount+ovgst-alloc)<>0 GROUP BY currcode";

$result = DB_query($sql,$db);

$LocalTotal = 0;

echo '<table class="selection">';

while ($myrow=DB_fetch_array($result)){

	echo '<tr><td><font size="4">' . _('Total Supplier Balances in') . ' </font></td>
		<td><font size="4">' . $myrow['currcode'] . '</font></td>
		<td class="number"><font size="4">' . locale_money_format($myrow['currencybalance'], $myrow['currcode']) . '</font></td>
		<td><font size="4"> ' . _('in') . ' ' . $_SESSION['CompanyRecord']['currencydefault'] . '</font></td>
		<td class="number"><font size="4">' . locale_money_format($myrow['localbalance'], $_SESSION['CompanyRecord']['currencydefault']) . '</font></td></tr>';
	$LocalTotal += $myrow['localbalance'];
}

echo '<tr><td colspan="4"><font size="4">' . _('Total Balances in local currency') . ':</font></td>
	<td class="number"><font size="4">' . locale_money_format($LocalTotal, $_SESSION['CompanyRecord']['currencydefault']) . '</font></td></tr>';

echo '</table>';

include('includes/footer.inc');
?>