<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('view');
	}

	public function cetak()
	{
		$row = 1;
		if (($handle = fopen("/upload/jam 24.00/GRG1=24.00.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			echo "<p> $num fields in line $row: <br /></p>\n";
			$row++;
			for ($c=0; $c < $num; $c++) {
				echo $data[$c] . "<br />\n";
			}
		}
		fclose($handle);
		}
		//$this->load->view('welcome_message');
		//$this->load->view('view');
	}

	public function fgetcsv(){

    $row = 1;
	  $path = "/upload/jam 24.00/GRG1=24.00.csv";
	  $path2 = "C:\EXCION_GACA\ION DL\GARNG 12.csv";
	  $path3 = "C:\EXCION_GACA\ION DL\JELOK 3.csv";
	  $path4 = "C:\EXCION_GACA\ION DL\JELOK 124.csv";
	  $path5 = "C:\EXCION_GACA\ION DL\KDOMBO.csv";
	  $path6 = "C:\EXCION_GACA\ION DL\KTG 1.csv";
	  $path7 = "C:\EXCION_GACA\ION DL\KTG 2.csv";
	  $path8 = "C:\EXCION_GACA\ION DL\PBS 1.csv";

	  //if(($handle = fopen($path2, "r")) != FALSE){
	  //coba mau pakai in_array  sama array_search
	  //array search : buat cari value array, return key arraynya
	  //in_array : cek apakah nilai tertentu ada di list array
	  //$data = fgetcsv($handle, 1000, ",");
	  //"kolom ke-$key di baris $row :<br /></p>\n";
	  //echo $key;

	  //tampilan 1, tampilin semua data pake tabel 2 dimensi
	  //file 1
	  $handle = fopen($path2, "r");
	  $data = fgetcsv($handle, 1000, ",");
	  $key = array_search("kVARh del int", $data);
	  fclose($handle);
	  $handle = fopen($path2, "r");
	  $catch = array();
	  $a=0;

	  //file 2
	  $handle2 = fopen($path3, "r");
	  $data = fgetcsv($handle2, 1000, ",");
	  $key2 = array_search("kWh del int", $data);
	  fclose($handle2);
	  $handle2 = fopen($path3, "r");
	  $catch2 = array();
	  $b=0;

	  //*
	  //file 4
	  $handle4 = fopen($path5, "r");
	  $data = fgetcsv($handle4, 1000, ",");
	  $key4 = array_search("kWh del int", $data);
	  fclose($handle4);
	  $handle4 = fopen($path5, "r");
	  $catch4 = array();
	  $d=0; //*/

	  //file 3
	  $handle3 = fopen($path4, "r");
	  $data = fgetcsv($handle3, 1000, ",");
	  $key3 = array_search("kWh del int", $data);
	  fclose($handle3);
	  $handle3 = fopen($path4, "r");
	  $catch3 = array();
	  $c=0;

	  ///*
	  //file 5
	  $handle5 = fopen($path6, "r");
	  $data = fgetcsv($handle5, 1000, ",");
	  $key5 = array_search("kWh del int", $data);
	  fclose($handle5);
	  $handle5 = fopen($path6, "r");
	  $catch5 = array();
	  $e=0;

	  //file 6
	  $handle6 = fopen($path7, "r");
	  $data = fgetcsv($handle6, 1000, ",");
	  $key6 = array_search("kWh del int", $data);
	  fclose($handle6);
	  $handle6 = fopen($path7, "r");
	  $catch6 = array();
	  $f=0;
	  //*/

	  //echo('<table>');
    echo "<table>";
	  while (($list= fgetcsv($handle, 1000, ",")) !=FALSE){//sumber masalah : fgetcsv nya harus dalam kondisi loop! harus!
		//echo("<tr>\r\n");
    echo "<tr>\r\n";
		foreach ($list as $index=>$val){
			//echo("\t<td>");
      echo("\t<td>");
			//echo htmlentities($val, ENT_QUOTES);
      echo htmlentities($val, ENT_QUOTES);
			//echo $val;
      echo $val;
			if($index==$key){
				$catch[$a]=$val;
				$a++;
			}
			//echo("</td>\r\n");
      echo "</td>\r\n";
		}
		//echo("</tr>\r\n");
    echo "</tr>\r\n";
	  }
    echo "</table>";

	  while (($list= fgetcsv($handle2, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key2){
				$catch2[$b]=$val;
				$b++;
			}
		}
	  }

	while (($list= fgetcsv($handle3, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key3){
				$catch3[$c]=$val;
				$c++;
			}
		}
	  }
	  while (($list= fgetcsv($handle4, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key4){
				$catch4[$d]=$val;
				$d++;
			}
		}
	  }
	  while (($list= fgetcsv($handle5, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key5){
				$catch5[$e]=$val;
				$e++;
			}
		}
	  }
	  while (($list= fgetcsv($handle6, 1000, ",")) !=FALSE){
		foreach ($list as $index=>$val){
			if($index==$key6){
				$catch6[$f]=$val;
				$f++;
			}
		}
	  }
	  //echo('</table>');

	  //tampilan 2, tampilin semua data pake list
	  //}
	  /*while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$num = count($data);
		echo "<p> $num fields in line $row: <br /></p>\n";
		$row++;
		//for ($c=0; $c < $num; $c++) {
			echo $data[2] . "<br />\n";
		//}
	  }*/
	  //}
	  fclose($handle);

	  //coba print return value array catch
	  print "<pre>"; echo "file ke - 1 ".$path2." \n"; print_r($catch); print "</pre>";
	  print "<pre>"; echo "file ke - 2 ".$path3." \n"; print_r($catch2); print "</pre>";
	  print "<pre>"; echo "file ke - 3 ".$path4." \n"; print_r($catch3); print "</pre>";
	  print "<pre>"; echo "file ke - 4 ".$path5." \n"; print_r($catch4); print "</pre>";
	  print "<pre>"; echo "file ke - 5 ".$path6." \n"; print_r($catch5); print "</pre>";
	  print "<pre>"; echo "file ke - 6 ".$path7." \n"; print_r($catch6); print "</pre>";
	  //print "<pre>"; print_r($key); print "</pre>";
    }


    public function multiCsv($bukaFile="C:\EXCION_GACA\ION DL\*.csv"){
      /*
      foreach (glob("myfiles/*.html") as $file) {
        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
          $line = fgets($file_handle);
          echo $line;
        }
        fclose($file_handle);
      }*/
      $ke=1;
      foreach (glob($bukaFile) as $file) { //glob() = mengembalikan array nama file atau direktori yang cocok dengan pola yang telah ditentukan.
        $fileHandle = fopen($file, "r"); // fopen = buka file.
        //while (!feof($file_handle)) { //feof = ngecek kursor nya ada di end-of-file atau engga. Return true/false.
          $line = fgets($fileHandle); //fgets() = fungsi yang digunakan untuk membaca satu baris dari sebuah file. Return satu baris.
          echo "file ke-".$ke." baris pertama<br />\n";
          echo $file."<br />\n";
          echo $line."<br />\n";
          echo "<br />\n";
          $ke++;
        //}
        fclose($fileHandle);
      }
    }

    public function tablecsv(){
      $row = 1;
  	  $path = "/upload/jam 24.00/GRG1=24.00.csv";
  	  $path2 = "C:\EXCION_GACA\ION DL\GARNG 12.csv";
  	  $path3 = "C:\EXCION_GACA\ION DL\JELOK 3.csv";
  	  $path4 = "C:\EXCION_GACA\ION DL\JELOK 124.csv";
  	  $path5 = "C:\EXCION_GACA\ION DL\KDOMBO.csv";
  	  $path6 = "C:\EXCION_GACA\ION DL\KTG 1.csv";
  	  $path7 = "C:\EXCION_GACA\ION DL\KTG 2.csv";
  	  $path8 = "C:\EXCION_GACA\ION DL\PBS 1.csv";

      //file 1
  	  $handle = fopen($path2, "r");
  	  $data = fgetcsv($handle, 1000, ",");
  	  $key = array_search("kVARh del int", $data);
  	  fclose($handle);
  	  $handle = fopen($path2, "r");
  	  $catch = array();
  	  $a=0;

      while (($list= fgetcsv($handle, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key){
  				$catch[$a]=$val;
  				$a++;
  			}
  		}
      }

      //file 2
  	  $handle2 = fopen($path3, "r");
  	  $data = fgetcsv($handle2, 1000, ",");
  	  $key2 = array_search("kWh del int", $data);
  	  fclose($handle2);
  	  $handle2 = fopen($path3, "r");
  	  $catch2 = array();
  	  $b=0;

      while (($list= fgetcsv($handle2, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key2){
  				$catch2[$b]=$val;
  				$b++;
  			}
  		}
  	  }

  	  //*
  	  //file 4
  	  $handle4 = fopen($path5, "r");
  	  $data = fgetcsv($handle4, 1000, ",");
  	  $key4 = array_search("kWh del int", $data);
  	  fclose($handle4);
  	  $handle4 = fopen($path5, "r");
  	  $catch4 = array();
  	  $d=0; //*/

      while (($list= fgetcsv($handle4, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key4){
  				$catch4[$d]=$val;
  				$d++;
  			}
  		}
  	  }

  	  //file 3
  	  $handle3 = fopen($path4, "r");
  	  $data = fgetcsv($handle3, 1000, ",");
  	  $key3 = array_search("kWh del int", $data);
  	  fclose($handle3);
  	  $handle3 = fopen($path4, "r");
  	  $catch3 = array();
  	  $c=0;

      while (($list= fgetcsv($handle3, 1000, ",")) !=FALSE){
    		foreach ($list as $index=>$val){
    			if($index==$key3){
    				$catch3[$c]=$val;
    				$c++;
    			}
    		}
    	  }

  	  ///*
  	  //file 5
  	  $handle5 = fopen($path6, "r");
  	  $data = fgetcsv($handle5, 1000, ",");
  	  $key5 = array_search("kWh del int", $data);
  	  fclose($handle5);
  	  $handle5 = fopen($path6, "r");
  	  $catch5 = array();
  	  $e=0;

      while (($list= fgetcsv($handle5, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key5){
  				$catch5[$e]=$val;
  				$e++;
  			}
  		}
  	  }

  	  //file 6
  	  $handle6 = fopen($path7, "r");
  	  $data = fgetcsv($handle6, 1000, ",");
  	  $key6 = array_search("kWh del int", $data);
  	  fclose($handle6);
  	  $handle6 = fopen($path7, "r");
  	  $catch6 = array();
  	  $f=0;
  	  //*/

      while (($list= fgetcsv($handle6, 1000, ",")) !=FALSE){
  		foreach ($list as $index=>$val){
  			if($index==$key6){
  				$catch6[$f]=$val;
  				$f++;
  			}
  		}
      }
        $data = array(
          'kwh_k' => $catch,
          'kwh_t' => $catch2,
          'kavrh_k' => $catch3,
          'kavrh_t' => $catch4,
          'sss' => $catch5,
        );

        $this->load->view('tabel', $data);
      }


}
?>
