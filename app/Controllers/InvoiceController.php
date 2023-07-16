<?php

namespace App\Controllers;

use App\Models\InvoiceModel;

class InvoiceController extends BaseController
{
    public function index($id)
    {
        $invoiceModel = new InvoiceModel();
        $data['invoice'] = $invoiceModel->getInvoiceById($id);
        $data['title'] = "Invoices | Itstoreku";
        echo view('cetakfaktur', $data);
    }
}
