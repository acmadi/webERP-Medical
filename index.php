<?php
$PageSecurity=0;

include('includes/session.inc');
$title=_('Main Menu');
include('includes/header.inc');

/*The module link codes are hard coded in a switch statement below to determine the options to show for each tab */
$ModuleLink = array('orders', 'AR', 'AP', 'PO', 'stock', 'manuf',  'GL', 'FA', 'PC', 'system');
$ReportList = array('orders'=>'ord',
					'AR'=>'ar',
					'AP'=>'ap',
					'PO'=>'prch',
					'stock'=>'inv',
					'manuf'=>'man',
					'GL'=>'gl',
					'FA'=>'fa',
					'PC'=>'pc',
					'system'=>'sys'
					);

/*The headings showing on the tabs accross the main index used also in WWW_Users for defining what should be visible to the user */
$ModuleList = array(_('Sales'),
					_('Receivables'),
					_('Payables'),
					_('Purchases'),
					_('Inventory'),
					_('Manufacturing'),
					_('General Ledger'),
					_('Asset Manager'),
					_('Petty Cash'),
					_('Setup'));

$MenuItems['orders']['Transactions']['Caption'] = array( _('Enter An Order or Quotation'),
														_('Enter Shop Sales'),
														_('Register a Patient'),
														_('Registration Payments'),
														_('Deposit Received From Patient'),
														_('Radiology Test'),
														_('Laboratory Test'),
														_('Other Medical Services'),
														_('Sales of Drugs'),
														_('Billing for Inpatient Drugs and Services'),
														_('Create Insurance Invoice'),
														_('Outstanding Sales Orders/Quotations'),
														_('Special Order'),
														_('Recurring Order Template'),
														_('Process Recurring Orders')
														);
$MenuItems['orders']['Transactions']['URL'] = array( '/SelectOrderItems.php?NewOrder=Yes',
													'/CounterSales.php',
													'/KCMCRegister.php',
													'/KCMCAdmission.php?New=True',
													'/KCMCPatientDeposit.php?New=True',
													'/KCMCRadiology.php?New=True',
													'/KCMCLabTests.php?New=True',
													'/KCMCOtherMedicalServices.php?New=True',
													'/KCMCPharmacy.php?New=True',
													'/KCMCInPatientBilling.php?New=True',
													'/KCMCInsuranceInvoice.php',
													'/SelectSalesOrder.php',
													'/SpecialOrder.php',
													'/SelectRecurringSalesOrder.php',
													'/RecurringSalesOrdersProcess.php'
													);

$MenuItems['orders']['Reports']['Caption'] = array( _('Order Inquiry'),
													_('Radiology Dept Financial Report'),
													_('Laboratory Dept Financial Report'),
													_('Print Price Lists'),
													_('Order Status Report'),
													_('Orders Invoiced Reports'),
													_('Daily Sales Inquiry'),
													_('Order Delivery Differences Report'),
													_('Delivery In Full On Time (DIFOT) Report'),
													_('Sales Order Detail Or Summary Inquiries'),
													_('Top Sales Items Report'),
													_('Sales With Low Gross Profit Report')
												);

$MenuItems['orders']['Reports']['URL'] = array( '/SelectCompletedOrder.php',
												'/KCMCRadiologyReport.php',
												'/KCMCLaboratoryReport.php',
												'/PDFPriceList.php',
												'/PDFOrderStatus.php',
												'/PDFOrdersInvoiced.php',
												'/DailySalesInquiry.php',
												'/PDFDeliveryDifferences.php',
												'/PDFDIFOT.php',
												'/SalesInquiry.php',
												'/TopItems.php',
												'/PDFLowGP.php'
											);

$MenuItems['orders']['Maintenance']['Caption'] = array( _('Select Contract'),
													_('Create Contract'),
													_('Create or Modify an Insurance Company')
												);

$MenuItems['orders']['Maintenance']['URL'] = array( '/SelectContract.php',
													'/Contracts.php',
													'/KCMCInsuranceCompanyDetails.php'
												);

$MenuItems['AR']['Transactions']['Caption'] = array (_('Select Order to Invoice'),
														_('Create A Credit Note'),
														_('Enter Receipts'),
														_('Allocate Receipts or Credit Notes')
													);
$MenuItems['AR']['Transactions']['URL'] = array ('/SelectSalesOrder.php',
													'/SelectCreditItems.php?NewCredit=Yes',
													'/CustomerReceipt.php?NewReceipt=Yes&amp;Type=Customer',
													'/CustomerAllocations.php'
												);

$MenuItems['AR']['Reports']['Caption'] = array (_('Where Allocated Inquiry'),
												_('Print Invoices or Credit Notes'),
												_('Print Statements'),
												_('Sales Analysis Reports'),
												_('Aged Customer Balances/Overdues Report'),
												_('Re-Print A Deposit Listing'),
												_('Debtor Balances At A Prior Month End'),
												_('Customer Listing By Area/Salesperson'),
												_('Sales Graphs'),
												_('List Daily Transactions'),
												_('Customer Transaction Inquiries')
												);

$MenuItems['AR']['Reports']['URL'] = array ('/CustWhereAlloc.php',
											'/PrintCustTrans.php',
											'/PrintCustStatements.php',
											'/SalesAnalRepts.php',
											'/AgedDebtors.php',
											'/PDFBankingSummary.php',
											'/DebtorsAtPeriodEnd.php',
											'/PDFCustomerList.php',
											'/SalesGraph.php',
											'/PDFCustTransListing.php',
											'/CustomerTransInquiry.php'
											);

$MenuItems['AR']['Maintenance']['Caption'] = array (_('Add Customer'),
													_('Customers')
													);
$MenuItems['AR']['Maintenance']['URL'] = array ('/Customers.php',
												'/SelectCustomer.php'
												);

$MenuItems['AP']['Transactions']['Caption'] = array (_('Select Supplier'),
													_('Supplier Allocations')
													);
$MenuItems['AP']['Transactions']['URL'] = array ('/SelectSupplier.php',
												'/SupplierAllocations.php'
												);

$MenuItems['AP']['Reports']['Caption'] = array (_('Aged Supplier Report'),
												_('Payment Run Report'),
												_('Remittance Advices'),
												_('Outstanding GRNs Report'),
												_('Supplier Balances At A Prior Month End'),
												_('List Daily Transactions'),
												_('Supplier Transaction Inquiries')
												);

$MenuItems['AP']['Reports']['URL'] = array ('/AgedSuppliers.php',
											'/SuppPaymentRun.php',
											'/PDFRemittanceAdvice.php',
											'/OutstandingGRNs.php',
											'/SupplierBalsAtPeriodEnd.php',
											'/PDFSuppTransListing.php',
											'/SupplierTransInquiry.php'
											);

$MenuItems['AP']['Maintenance']['Caption'] = array (_('Add Supplier'),
													_('Maintain Factor Companies')
													);
$MenuItems['AP']['Maintenance']['URL'] = array ('/Suppliers.php',
												'/Factors.php'
												);

$MenuItems['PO']['Transactions']['Caption'] = array (_('Purchase Orders'),
													_('Add Purchase Order'),
													_('Create a New Tender'),
													_('Edit Existing Tenders'),
													_('Process Tenders and Offers'),
													_('Orders to Authorise'),
													_('Shipment Entry'),
													_('Select A Shipment')
													);
$MenuItems['PO']['Transactions']['URL'] = array ('/PO_SelectOSPurchOrder.php',
												'/PO_Header.php?NewOrder=Yes',
												'/SupplierTenderCreate.php?New=Yes',
												'/SupplierTenderCreate.php?Edit=Yes',
												'/OffersReceived.php',
												'/PO_AuthoriseMyOrders.php',
												'/SelectSupplier.php',
												'/Shipt_Select.php'
												);

$MenuItems['PO']['Reports']['Caption'] = array (_('Purchase Order Inquiry'),
												_('Purchase Order Detail Or Summary Inquiries')
												);

$MenuItems['PO']['Reports']['URL'] = array ('/PO_SelectPurchOrder.php',
											'/POReport.php'
											);

$MenuItems['PO']['Maintenance']['Caption'] = array (
													);
$MenuItems['PO']['Maintenance']['URL'] = array (
												);
$MenuItems['stock']['Transactions']['Caption'] = array (_('Receive Purchase Orders'),
														_('Bulk Inventory Transfer') . ' - ' . _('Dispatch'),
														_('Bulk Inventory Transfer') . ' - ' . _('Receive'),
														_('Inventory Location Transfers'),
														_('Inventory Adjustments'),
														_('Reverse Goods Received'),
														_('Enter Stock Counts')
														);
$MenuItems['stock']['Transactions']['URL'] = array ('/PO_SelectOSPurchOrder.php',
													'/StockLocTransfer.php',
													'/StockLocTransferReceive.php',
													'/StockTransfers.php?New=Yes',
													'/StockAdjustments.php?NewAdjustment=Yes',
													'/ReverseGRN.php',
													'/StockCounts.php'
													);

$MenuItems['stock']['Reports']['Caption'] = array (_('Serial Item Research Tool'),
													_('Print Price Labels'),
													_('Reprint GRN'),
													_('Inventory Item Movements'),
													_('Inventory Item Status'),
													_('Inventory Item Usage'),
													_('Inventory Quantities'),
													_('Reorder Level'),
													_('Stock Dispatch'),
													_('Inventory Valuation Report'),
													_('Inventory Planning Report'),
													_('Inventory Planning Based On Preferred Supplier Data'),
													_('Inventory Stock Check Sheets'),
													_('Make Inventory Quantities CSV'),
													_('Compare Counts Vs Stock Check Data'),
													_('All Inventory Movements By Location/Date'),
													_('List Inventory Status By Location/Category'),
													_('Historical Stock Quantity By Location/Category'),
													_('List Negative Stocks'),
													_('Period Stock Transaction Listing'),
													_('Stock Transfer Note')
												);

$MenuItems['stock']['Reports']['URL'] = array ('/StockSerialItemResearch.php',
												'/PDFPrintLabel.php',
												'/ReprintGRN.php',
												'/StockMovements.php',
												'/StockStatus.php',
												'/StockUsage.php',
												'/InventoryQuantities.php',
												'/ReorderLevel.php',
												'/StockDispatch.php',
												'/InventoryValuation.php',
												'/InventoryPlanning.php',
												'/InventoryPlanningPrefSupplier.php',
												'/StockCheck.php',
												'/StockQties_csv.php',
												'/PDFStockCheckComparison.php',
												'/StockLocMovements.php',
												'/StockLocStatus.php',
												'/StockQuantityByDate.php',
												'/PDFStockNegatives.php',
												'/PDFPeriodStockTransListing.php',
												'/PDFStockTransfer.php'
												);

$MenuItems['stock']['Maintenance']['Caption'] = array (_('Add A New Item'),
														_('Select An Item'),
														_('Sales Category Maintenance'),
														_('Add or Update Prices Based On Costs'),
														_('View or Update Prices Based On Costs'),
														_('Reorder Level By Category/Location'),
														_('Item Manufacturers')
														);
$MenuItems['stock']['Maintenance']['URL'] = array ('/Stocks.php',
													'/SelectProduct.php',
													'/SalesCategories.php',
													'/PricesBasedOnMarkUp.php',
													'/PricesByCost.php',
													'/ReorderLevelLocation.php',
													'/Manufacturers.php'
													);

$MenuItems['manuf']['Transactions']['Caption'] = array (_('Work Order Entry'),
														_('Select A Work Order')
														);
$MenuItems['manuf']['Transactions']['URL'] = array ('/WorkOrderEntry.php',
													'/SelectWorkOrder.php'
													);

$MenuItems['manuf']['Reports']['Caption'] = array (_('Costed Bill Of Material Inquiry'),
													_('Where Used Inquiry'),
													_('Indented Bill Of Material Listing'),
													_('List Components Required'),
													_('Indented Where Used Listing'),
													_('MRP'),
													_('MRP Shortages'),
													_('MRP Suggested Purchase Orders'),
													_('MRP Suggested Work Orders'),
													_('MRP Reschedules Required')
												);

$MenuItems['manuf']['Reports']['URL'] = array ('/BOMInquiry.php',
												'/WhereUsedInquiry.php',
												'/BOMIndented.php',
												'/BOMExtendedQty.php',
												'/BOMIndentedReverse.php',
												'/MRPReport.php',
												'/MRPShortages.php',
												'/MRPPlannedPurchaseOrders.php',
												'/MRPPlannedWorkOrders.php',
												'/MRPReschedules.php'
												);

$MenuItems['manuf']['Maintenance']['Caption'] = array (_('Work Centre'),
												_('Bills Of Material'),
												_('Master Schedule'),
												_('Auto Create Master Schedule'),
												_('MRP Calculation')
												);

$MenuItems['manuf']['Maintenance']['URL'] = array ('/WorkCentres.php',
											'/BOMs.php',
											'/MRPDemands.php',
											'/MRPCreateDemands.php',
											'/MRP.php'
											);

$MenuItems['GL']['Transactions']['Caption'] = array (_('Bank Account Payments Entry'),
														_('Bank Account Receipts Entry'),
														_('Journal Entry'),
														_('Bank Account Payments Matching'),
														_('Bank Account Receipts Matching')
														);

$MenuItems['GL']['Transactions']['URL'] = array ('/Payments.php?NewPayment=Yes',
													'/CustomerReceipt.php?NewReceipt=Yes&amp;Type=GL',
													'/GLJournal.php?NewJournal=Yes',
													'/BankMatching.php?Type=Payments',
													'/BankMatching.php?Type=Receipts'
													);

$MenuItems['GL']['Reports']['Caption'] = array (_('Trial Balance'),
												_('Account Inquiry'),
												_('Account Listing'),
												_('Account Listing to CSV File'),
												_('Bank Account Reconciliation Statement'),
												_('Cheque Payments Listing'),
												_('Daily Bank Transactions'),
												_('Income and Expenditure Statement'),
												_('Income and Expenditure Statement By Functional Unit'),
												_('Balance Sheet'),
												_('Tag Reports'),
												_('Tax Reports')
												);

$MenuItems['GL']['Reports']['URL'] = array ('/GLTrialBalance.php',
											'/SelectGLAccount.php',
											'/GLAccountReport.php',
											'/GLAccountCSV.php',
											'/BankReconciliation.php',
											'/PDFChequeListing.php',
											'/DailyBankTransactions.php',
											'/GLProfit_Loss.php',
											'/KCMCFunctionalUnitPL.php',
											'/GLBalanceSheet.php',
											'/GLTagProfit_Loss.php',
											'/Tax.php'
											);

$MenuItems['GL']['Maintenance']['Caption'] = array (_('GL Account'),
													_('GL Budgets'),
													_('Account Groups'),
													_('Account Sections'),
													_('GL Tags')
													);

$MenuItems['GL']['Maintenance']['URL'] = array ('/GLAccounts.php',
												'/GLBudgets.php',
												'/AccountGroups.php',
												'/AccountSections.php',
												'/GLTags.php'
												);

$MenuItems['FA']['Transactions']['Caption'] = array (_('Add a new Asset'),
													_('Select an Asset'),
													_('Change Asset Location'),
													_('Depreciation Journal')
													);

$MenuItems['FA']['Transactions']['URL'] = array ('/FixedAssetItems.php',
												'/SelectAsset.php',
												'/FixedAssetTransfer.php',
												'/FixedAssetDepreciation.php'
												);

$MenuItems['FA']['Reports']['Caption'] = array (_('Asset Register'),
												);

$MenuItems['FA']['Reports']['URL'] = array ('/FixedAssetRegister.php',
											);

$MenuItems['FA']['Maintenance']['Caption'] = array (_('Asset Categories Maintenance'),
													_('Add or Maintain Asset Locations')
													);

$MenuItems['FA']['Maintenance']['URL'] = array ('/FixedAssetCategories.php',
												'/FixedAssetLocations.php'
												);

$MenuItems['PC']['Transactions']['Caption'] = array (_('Assign Cash to PC Tab'),
													_('Claim Expenses From PC Tab'),
													_('Expenses Authorisation')
													);

$MenuItems['PC']['Transactions']['URL'] = array ('/PcAssignCashToTab.php',
												'/PcClaimExpensesFromTab.php',
												'/PcAuthorizeExpenses.php'
												);

$MenuItems['PC']['Reports']['Caption'] = array (_('Asset Register'),
												);

$MenuItems['PC']['Reports']['URL'] = array ('/FixedAssetRegister.php',
											);

$MenuItems['PC']['Maintenance']['Caption'] = array (_('Types of PC Tabs'),
													_('PC Tabs'),
													_('PC Expenses'),
													_('Expenses for Type of PC Tab')
													);

$MenuItems['PC']['Maintenance']['URL'] = array ('/PcTypeTabs.php',
												'/PcTabs.php',
												'/PcExpenses.php',
												'/PcExpensesTypeTab.php'
												);

$MenuItems['system']['Transactions']['Caption'] = array (_('Company Preferences'),
														_('Configuration Settings'),
														_('User Maintenance'),
														_('Maintain Security Tokens'),
														_('Role Permissions'),
														_('Page Security Settings'),
														_('Bank Accounts'),
														_('Currency Maintenance'),
														_('Tax Authorities and Rates Maintenance'),
														_('Tax Group Maintenance'),
														_('Dispatch Tax Province Maintenance'),
														_('Tax Category Maintenance'),
														_('List Periods Defined'),
														_('Report Builder Tool'),
														_('View Audit Trail'),
														_('Geocode Setup'),
														_('Form Layout Editor'),
														_('Label Templates Maintenance'),
														_('SMTP Server Details')
														);

$MenuItems['system']['Transactions']['URL'] = array ('/CompanyPreferences.php',
													'/SystemParameters.php',
													'/WWW_Users.php',
													'/SecurityTokens.php',
													'/WWW_Access.php',
													'/PageSecurity.php',
													'/BankAccounts.php',
													'/Currencies.php',
													'/TaxAuthorities.php',
													'/TaxGroups.php',
													'/TaxProvinces.php',
													'/TaxCategories.php',
													'/PeriodsInquiry.php',
													'/reportwriter/admin/ReportCreator.php',
													'/AuditTrail.php',
													'/GeocodeSetup.php',
													'/FormDesigner.php',
													'/Labels.php',
													'/SMTPServer.php'
													);

$MenuItems['system']['Reports']['Caption'] = array (_('Sales Types'),
													_('Customer Types'),
													_('Supplier Types'),
													_('Credit Status'),
													_('Payment Terms'),
													_('Set Purchase Order Authorisation levels'),
													_('Payment Methods'),
													_('Sales People'),
													_('Sales Areas'),
													_('Shippers'),
													_('Sales GL Interface Postings'),
													_('COGS GL Interface Postings'),
													_('Freight Costs Maintenance'),
													_('Discount Matrix')
													);

$MenuItems['system']['Reports']['URL'] = array ('/SalesTypes.php',
												'/CustomerTypes.php',
												'/SupplierTypes.php',
												'/CreditStatus.php',
												'/PaymentTerms.php',
												'/PO_AuthorisationLevels.php',
												'/PaymentMethods.php',
												'/SalesPeople.php',
												'/Areas.php',
												'/Shippers.php',
												'/SalesGLPostings.php',
												'/COGSGLPostings.php',
												'/FreightCosts.php',
												'/DiscountMatrix.php'
												);

$MenuItems['system']['Maintenance']['Caption'] = array (_('Inventory Categories Maintenance'),
														_('Inventory Locations Maintenance'),
														_('Discount Category Maintenance'),
														_('Units of Measure'),
														_('MRP Available Production Days'),
														_('MRP Demand Types')
														);

$MenuItems['system']['Maintenance']['URL'] = array ('/StockCategories.php',
													'/Locations.php',
													'/DiscountCategories.php',
													'/UnitsOfMeasure.php',
													'/MRPCalendar.php',
													'/MRPDemandTypes.php'
													);

if (isset($SupplierLogin) and $SupplierLogin==1){
	echo '<table class="table_index">
			<tr>
			<td class="menu_group_item">
				<p>&bull; <a href="' . $rootpath . '/SupplierTenders.php?TenderType=1">' . _('View or Amend outstanding offers') . '</a></p>
			</td>
			</tr>
			<tr>
			<td class="menu_group_item">
				<p>&bull; <a href="' . $rootpath . '/SupplierTenders.php?TenderType=2">' . _('Create a new offer') . '</a></p>
			</td>
			</tr>
			<tr>
			<td class="menu_group_item">
				<p>&bull; <a href="' . $rootpath . '/SupplierTenders.php?TenderType=3">' . _('View any open tenders without an offer') . '</a></p>
			</td>
			</tr>
		</table>';
	include('includes/footer.inc');
	exit;
} elseif (isset($SupplierLogin) and $SupplierLogin==0){
	echo '<table class="table_index">
			<tr>
			<td class="menu_group_item">
				<p>&bull; <a href="' . $rootpath . '/CustomerInquiry.php?CustomerID=' . $_SESSION['CustomerID'] . '">' . _('Account Status') . '</a></p>
			</td>
			</tr>
			<tr>
			<td class="menu_group_item">
				<p>&bull; <a href="' . $rootpath . '/SelectOrderItems.php?NewOrder=Yes">' . _('Place An Order') . '</a></p>
			</td>
			</tr>
			<tr>
			<td class="menu_group_item">
				<p>&bull; <a href="' . $rootpath . '/SelectCompletedOrder.php?SelectedCustomer=' . $_SESSION['CustomerID'] . '">' . _('Order Status') . '</a></p>
			</td>
			</tr>
		</table>';
	include('includes/footer.inc');
	exit;
}

if (isset($_GET['Application'])){ /*This is sent by this page (to itself) when the user clicks on a tab */
	$_SESSION['Module'] = $_GET['Application'];
}

echo '<table width="99%">
		<tr>
			<td width="10%" valign="top">';
echo '<table class="main_menu" width="100%" cellspacing="0" cellpadding="0" border="0">';

	$i=0;

while ($i < count($ModuleLink)){

	// This determines if the user has display access to the module see config.php and header.inc
	// for the authorisation and security code
	if ($_SESSION['ModulesEnabled'][$i]==1)	{
		// If this is the first time the application is loaded then it is possible that
		// SESSION['Module'] is not set if so set it to the first module that is enabled for the user
		if (!isset($_SESSION['Module'])OR $_SESSION['Module']==''){
			$_SESSION['Module']=$ModuleLink[$i];
		}
		if ($ModuleLink[$i] == $_SESSION['Module']){
			echo '<tr><td class="main_menu_selected"><a href="' . $_SERVER['PHP_SELF'] . '?Application='. $ModuleLink[$i] . '">' . $ModuleList[$i] . '</a></td></tr>';
		} else {
			echo '<tr><td class="main_menu_unselected"><a href="' . $_SERVER['PHP_SELF'] . '?Application='. $ModuleLink[$i] . '">' . $ModuleList[$i] . '</a></td></tr>';
		}
	}
	$i++;
}

echo '</table>';

echo '</td>';
echo '<td width="30%" valign="top">';
if ($_SESSION['Module']=='system') {
	$Header='<img src="' . $rootpath . '/css/' . $theme . '/images/company.png" title="' . _('General Setup Options') . '" alt="" /><b>' . _('General Setup Options') . '</b>';
} else {
	$Header='<img src="' . $rootpath . '/css/' . $theme . '/images/transactions.png" title="' . _('Transactions') . '" alt="" /><b>'. _('Transactions') . '</b>';
}
echo '	<table width="100%" class="selection">
			<tr>
				<td class="menu_group_headers">
				<div class="centre">
					' . $Header . '
				</div>
				</td>
			</tr>';

$i=0;
foreach ($MenuItems[$_SESSION['Module']]['Transactions']['Caption'] as $Caption) {
/* Transactions Menu Item */
	echo '<tr>
				<td class="menu_group_item">
					<p>&bull; <a href="' . $rootpath . $MenuItems[$_SESSION['Module']]['Transactions']['URL'][$i] .'">' . $Caption . '</a></p>
				</td>
				</tr>';
	$i++;
}
echo '</table>';
echo '</td>';


echo '<td width="30%" valign="top">';
if ($_SESSION['Module']=='system') {
	$Header='<img src="' . $rootpath . '/css/' . $theme . '/images/ar.png" title="' . _('Receivables/Payables Setup') . '" alt="" /><b>' . _('Receivables/Payables Setup') . '</b>';
} else {
	$Header='<img src="' . $rootpath . '/css/' . $theme . '/images/reports.png" title="' . _('Inquiries and Reports') . '" alt="" /><b>'. _('Inquiries and Reports') . '</b>';
}
echo '	<table width="100%" class="selection">
			<tr>
				<td class="menu_group_headers">
				<div class="centre">
					' . $Header . '
				</div>
				</td>
			</tr>';
$i=0;
foreach ($MenuItems[$_SESSION['Module']]['Reports']['Caption'] as $Caption) {
/* Transactions Menu Item */
	echo '<tr>
				<td class="menu_group_item">
					<p>&bull; <a href="' . $rootpath . $MenuItems[$_SESSION['Module']]['Reports']['URL'][$i] .'">' . $Caption . '</a></p>
				</td>
				</tr>';
	$i++;
}
echo GetRptLinks($_SESSION['Module']);
echo '</table>';
echo '</td>';


echo '<td width="30%" valign="top">';
if ($_SESSION['Module']=='system') {
	$Header='<img src="' . $rootpath . '/css/' . $theme . '/images/inventory.png" title="' . _('Inventory Setup') . '" alt="" /><b>' . _('Inventory Setup') . '</b>';
} else {
	$Header='<img src="' . $rootpath . '/css/' . $theme . '/images/maintenance.png" title="' . _('Maintenance') . '" alt="" /><b>'. _('Maintenance') . '</b>';
}
echo '	<table width="100%" class="selection">
			<tr>
				<td class="menu_group_headers">
				<div class="centre">
					' . $Header . '
				</div>
				</td>
			</tr>';
$i=0;
foreach ($MenuItems[$_SESSION['Module']]['Maintenance']['Caption'] as $Caption) {
/* Transactions Menu Item */
	echo '<tr>
				<td class="menu_group_item">
					<p>&bull; <a href="' . $rootpath . $MenuItems[$_SESSION['Module']]['Maintenance']['URL'][$i] .'">' . $Caption . '</a></p>
				</td>
				</tr>';
	$i++;
}
echo '</table>';
echo '</td>';

echo '</tr>
	</table>';

include('includes/footer.inc');

function GetRptLinks($GroupID) {
/*
This function retrieves the reports given a certain group id as defined in /reports/admin/defaults.php
in the acssociative array $ReportGroups[]. It will fetch the reports belonging solely to the group
specified to create a list of links for insertion into a table to choose a report. Two table sections will
be generated, one for standard reports and the other for custom reports.
*/
	global $db, $rootpath, $ReportList;
	require_once('reportwriter/languages/en_US/reports.php');
	require_once('reportwriter/admin/defaults.php');
	$GroupID=$ReportList[$GroupID];
	$Title= array(_('Custom Reports'), _('Standard Reports and Forms'));

	$sql= "SELECT id,
					reporttype,
					defaultreport,
					groupname,
					reportname
				FROM reports
				ORDER BY groupname,
						reportname";
	$Result=DB_query($sql,$db,'','',false,true);
	$ReportList = '';
	while ($Temp = DB_fetch_array($Result)) $ReportList[] = $Temp;

	$RptLinks = '';
	for ($Def=1; $Def>=0; $Def--) {
		$RptLinks .= '<tr><td class="menu_group_headers"><div align="center">'.$Title[$Def].'</div></td></tr>';
		$NoEntries = true;
		if ($ReportList) { // then there are reports to show, show by grouping
			foreach ($ReportList as $Report) {
				if ($Report['groupname']==$GroupID AND $Report['defaultreport']==$Def) {
					$RptLinks .= '<tr><td class="menu_group_item">';
					$RptLinks .= '<p>&bull; <a href="' . $rootpath . '/reportwriter/ReportMaker.php?action=go&reportid=' . $Report['id'] . '">' . _($Report['reportname']) . '</a></p>';
					$RptLinks .= '</td></tr>';
					$NoEntries = false;
				}
			}
			// now fetch the form groups that are a part of this group (List after reports)
			$NoForms = true;
			foreach ($ReportList as $Report) {
				$Group=explode(':',$Report['groupname']); // break into main group and form group array
				if ($NoForms AND $Group[0]==$GroupID AND $Report['reporttype']=='frm' AND $Report['defaultreport']==$Def) {
					$RptLinks .= '<tr><td class="menu_group_item">';
					$RptLinks .= '<img src="' . $rootpath . '/css/' . $_SESSION['Theme'] . '/images/folders.gif" width="16" height="13">&nbsp;';
					$RptLinks .= '<p>&bull; <a href="' . $rootpath . '/reportwriter/FormMaker.php?id=' . $Report['groupname'] . '"></p>';
					$RptLinks .= $FormGroups[$Report['groupname']] . '</a>';
					$RptLinks .= '</td></tr>';
					$NoForms = false;
					$NoEntries = false;
				}
			}
		}
		if ($NoEntries) $RptLinks .= '<tr><td class="menu_group_item">' . _('There are no reports to show!') . '</td></tr>';
	}
	return $RptLinks;
}

?>