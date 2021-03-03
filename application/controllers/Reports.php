<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Worksheet\ColumnDimension;
use PhpOffice\PhpSpreadsheet\Worksheet;

class Reports extends CI_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->helper('url');
		$this->load->model('Issue_Model', 'issue');
        $this->load->model('Book_Model', 'book');
        $this->load->model('Return_Model', 'return');
        $this->load->model('Categories_Model', 'class');
        $this->load->model('Students_Model', 'student');
        $this->load->model('Admin_Model', 'admin');
        $this->load->model('Reports_Model', 'reports');
	}

    public function booklist(){
        $spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Code ID');
		$sheet->setCellValue('B1', 'Book');
		$sheet->setCellValue('C1', 'Author');
		$sheet->setCellValue('D1', 'Class');
		$sheet->setCellValue('E1', 'Price');
		$sheet->setCellValue('F1', 'Rack');
		$sheet->setCellValue('G1', 'Arrival');
		$sheet->setCellValue('H1', 'Status');
		
		$info = $this->reports->get('book_table');
		$start = 2;
		
        foreach($info as $d){
			
            $sheet->setCellValue('A'.$start, $d->code_id);
			$sheet->setCellValue('B'.$start, $d->book);
			$sheet->setCellValue('C'.$start, $d->author);
			$sheet->setCellValue('D'.$start, $d->class);
            $sheet->setCellValue('E'.$start, $d->price);
			$sheet->setCellValue('F'.$start, $d->rack);
			$sheet->setCellValue('G'.$start, $d->arrival);
			$sheet->setCellValue('H'.$start, $d->status);
		
		    $start = $start+1;
		}
		
		
		$styleThinBlackBorderOutline = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => Border::BORDER_THIN,
							'color' => ['argb' => 'FF000000'],
						],
					],
				];
		
		$sheet->getColumnDimension('A')->setWidth(10);
		$sheet->getColumnDimension('B')->setWidth(50);
		$sheet->getColumnDimension('C')->setWidth(30);
		$sheet->getColumnDimension('D')->setWidth(20);
		$sheet->getColumnDimension('E')->setWidth(5);
		$sheet->getColumnDimension('F')->setWidth(5);
		$sheet->getColumnDimension('G')->setWidth(15);
		$sheet->getColumnDimension('H')->setWidth(15);

		$curdate = date('d-m-Y H:i:s');

		$writer = new Xlsx($spreadsheet);

		$filename = 'BookList-'.$curdate;
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }

    public function issuebook(){
        $spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Member ID');
		$sheet->setCellValue('B1', 'Code');
		$sheet->setCellValue('C1', 'Status');
		$sheet->setCellValue('D1', 'Issued Date');
		$sheet->setCellValue('E1', 'Return Date');
		
		$info = $this->reports->get('issue_table');
		$start = 2;
		
        foreach($info as $d){
			
            $sheet->setCellValue('A'.$start, $d->member);
			$sheet->setCellValue('B'.$start, $d->code);
			$sheet->setCellValue('C'.$start, $d->status);
			$sheet->setCellValue('D'.$start, $d->issued);
            $sheet->setCellValue('E'.$start, $d->return);
		
		    $start = $start+1;
		}
		
		
		$styleThinBlackBorderOutline = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => Border::BORDER_THIN,
							'color' => ['argb' => 'FF000000'],
						],
					],
				];
		
		$sheet->getColumnDimension('A')->setWidth(15);
		$sheet->getColumnDimension('B')->setWidth(50);
		$sheet->getColumnDimension('C')->setWidth(30);
		$sheet->getColumnDimension('D')->setWidth(20);
		$sheet->getColumnDimension('E')->setWidth(5);

		$curdate = date('d-m-Y H:i:s');

		$writer = new Xlsx($spreadsheet);

		$filename = 'IssuedDateList-'.$curdate;
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }

    public function returnbook(){
        $spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Member ID');
		$sheet->setCellValue('B1', 'Code');
		$sheet->setCellValue('C1', 'Status');
		$sheet->setCellValue('D1', 'Issued Date');
		$sheet->setCellValue('E1', 'Return Date');
		$sheet->setCellValue('F1', 'Expire Date');
		
		$info = $this->reports->get('return_table');
		$start = 2;
		
        foreach($info as $d){
			
            $sheet->setCellValue('A'.$start, $d->member);
			$sheet->setCellValue('B'.$start, $d->code);
			$sheet->setCellValue('C'.$start, $d->status);
			$sheet->setCellValue('D'.$start, $d->release);
            $sheet->setCellValue('E'.$start, $d->return);
            $sheet->setCellValue('F'.$start, $d->expire);
		
		    $start = $start+1;
		}
		
		
		$styleThinBlackBorderOutline = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => Border::BORDER_THIN,
							'color' => ['argb' => 'FF000000'],
						],
					],
				];
		
		$sheet->getColumnDimension('A')->setWidth(15);
		$sheet->getColumnDimension('B')->setWidth(50);
		$sheet->getColumnDimension('C')->setWidth(30);
		$sheet->getColumnDimension('D')->setWidth(20);
		$sheet->getColumnDimension('E')->setWidth(20);
		$sheet->getColumnDimension('F')->setWidth(20);

		$curdate = date('d-m-Y H:i:s');

		$writer = new Xlsx($spreadsheet);

		$filename = 'ReturnedDateList-'.$curdate;
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }

    public function categories(){
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Code');
		$sheet->setCellValue('B1', 'Categories');
		
		$info = $this->reports->get('class_table');
		$start = 2;
		
        foreach($info as $d){
			
            $sheet->setCellValue('A'.$start, $d->code);
			$sheet->setCellValue('B'.$start, $d->categories);
		
		    $start = $start+1;
		}
		
		
		$styleThinBlackBorderOutline = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => Border::BORDER_THIN,
							'color' => ['argb' => 'FF000000'],
						],
					],
				];
		
		$sheet->getColumnDimension('A')->setWidth(15);
		$sheet->getColumnDimension('B')->setWidth(50);

		$curdate = date('d-m-Y H:i:s');

		$writer = new Xlsx($spreadsheet);

		$filename = 'CategoriesList-'.$curdate;
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }

    public function students(){
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Member ID');
		$sheet->setCellValue('B1', 'Name');
		$sheet->setCellValue('C1', 'Section');
		$sheet->setCellValue('D1', 'Contact');
		
		$info = $this->reports->get('member_table');
		$start = 2;
		
        foreach($info as $d){
			
            $sheet->setCellValue('A'.$start, $d->member_id);
			$sheet->setCellValue('B'.$start, $d->name);
			$sheet->setCellValue('C'.$start, $d->section);
			$sheet->setCellValue('D'.$start, $d->contact);
		
		    $start = $start+1;
		}
		
		
		$styleThinBlackBorderOutline = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => Border::BORDER_THIN,
							'color' => ['argb' => 'FF000000'],
						],
					],
				];
		
		$sheet->getColumnDimension('A')->setWidth(15);
		$sheet->getColumnDimension('B')->setWidth(50);
		$sheet->getColumnDimension('C')->setWidth(50);
		$sheet->getColumnDimension('D')->setWidth(50);

		$curdate = date('d-m-Y H:i:s');

		$writer = new Xlsx($spreadsheet);

		$filename = 'StudentList-'.$curdate;
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }

    public function admin(){
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Name');
		$sheet->setCellValue('B1', 'Email');
		$sheet->setCellValue('C1', 'Status');
		
		$info = $this->reports->get('user_table');
		$start = 2;
		
        foreach($info as $d){
			
            $sheet->setCellValue('A'.$start, $d->name);
			$sheet->setCellValue('B'.$start, $d->email);
			$sheet->setCellValue('C'.$start, $d->status);
		
		    $start = $start+1;
		}
		
		
		$styleThinBlackBorderOutline = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => Border::BORDER_THIN,
							'color' => ['argb' => 'FF000000'],
						],
					],
				];
		
		$sheet->getColumnDimension('A')->setWidth(15);
		$sheet->getColumnDimension('B')->setWidth(50);
		$sheet->getColumnDimension('C')->setWidth(50);

		$curdate = date('d-m-Y H:i:s');

		$writer = new Xlsx($spreadsheet);

		$filename = 'AdminList-'.$curdate;
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }

}


?>