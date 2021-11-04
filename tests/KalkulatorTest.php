<?php
use PHPUnit\Framework\TestCase;
require_once "./Kalkulator.php";

class KalkulatorTest extends TestCase
{
	/*
	* Menguji persen ke desimal
	* 
	*/
	public function testPersenKeDesimal()
	{
		$hasil = Kalkulator::persenKeDesimal(85);
		$this->assertEquals(0.85, $hasil);
	}

	/*
	* Menguji modulo
	* 
	*/
	public function testModuloBenar()
	{
		$hasil = Kalkulator::modulo(7, 2);
		$this->assertEquals(1, $hasil);
	}

    /*
	* Menguji modulo
	* 
	*/
	public function testModuloSalah()
	{
		$hasil = Kalkulator::modulo(7, 2);
		$this->assertEquals(3, $hasil);
	}
	
	/*
	* Menguji kurang dari
	* 
	*/
	public function testKurangDariBenar()
	{
		$hasil = Kalkulator::kurangDari(10, 20);
		$this->assertEquals("benar", $hasil);
	}

    /*
	* Menguji kurang dari
	* 
	*/
	public function testKurangDariSalah()
	{
		$hasil = Kalkulator::kurangDari(10, 5);
		$this->assertEquals("benar", $hasil);
	}

	/*
	* Menguji lebih dari
	* 
	*/
	public function testLebihDariBenar()
	{
		$hasil = Kalkulator::lebihDari(20, 10);
		$this->assertEquals("benar", $hasil);
	}

    /*
	* Menguji lebih dari
	* 
	*/
	public function testLebihDariSalah()
	{
		$hasil = Kalkulator::lebihDari(5, 10);
		$this->assertEquals("benar", $hasil);
	}

	/*
	* Menguji sama dengan
	* 
	*/
	public function testSamaDenganBenar()
	{
		$hasil = Kalkulator::samaDengan(10, 10);
		$this->assertEquals("benar", $hasil);
	}

    /*
	* Menguji sama dengan
	* 
	*/
	public function testSamaDenganSalah()
	{
		$hasil = Kalkulator::samaDengan(10, 5);
		$this->assertEquals("benar", $hasil);
	}
}