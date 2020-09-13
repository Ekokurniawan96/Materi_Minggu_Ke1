 <?php 

class Hewan
{
	public $jumlah_kaki,
	       $bisa_terbang = "Bisa terbang",
	       $bersuara;	
}
/**
 * 
 */
class Kucing extends Hewan
{
	public $bisa_terbang = "Tidak bisa terbang";

	function jumlahkaki(){
		return $this->jumlah_kaki;
	}

	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Meoong";
	}
}
/**
 * 
 */
 class Anjing extends Hewan{
 	public $bisa_terbang = "Tidak bisa terbang";

	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Guk Guk Guk";
	} 	
}
/**
 * 
 */
 class Elang extends Hewan{

	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Miip Miip";
	}	
}
/**
 * 
 */
 class Angsa extends Hewan{

	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Kwak Kwak";
	}	
}
/**
 * 
 */
class Beruang extends Hewan{
	public $bisa_terbang = "Tidak bisa terbang";
	
	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Ngrump Ngrump";
	}	
}

 echo " Hewan <hr>";

 $Belang = new Kucing;
 $Belang->jumlah_kaki = 4;
 echo "Belang adalah Seekor kucing <br>";
 echo "Mempunyai kaki sebanyak : ". $Belang->jumlah_kaki."<br>";
 echo $Belang->bisa_terbang."<br>";
 echo "Belang bersuara  : ". $Belang->bersuara(). "<br>";

 echo "<br><hr>";

 $Butss= new Anjing;
 $Butss->jumlah_kaki = 4;
 echo "Butss adalah Seekor anjing <br>";
 echo "Mempunyai kaki sebanyak : ". $Butss->jumlah_kaki."<br>";
 echo $Butss->bisa_terbang."<br>";
 echo "Butss bersuara : ". $Butss->bersuara(). "<br>";

 echo "<br><hr>";
 
 $Zeys= new Elang;
 $Zeys->jumlah_kaki = 2;
 echo "Zeys adalah Seekor elang<br>";
 echo "Mempunyai kaki sebanyak : ". $Zeys->jumlah_kaki."<br>";
 echo $Zeys->bisa_terbang. "<br>";
 echo "Zeys bersuara : ". $Zeys->bersuara(). "<br>";

 echo "<br><hr>";

 $Nixie= new Angsa;
 $Nixie->jumlah_kaki = 2;
 echo "Nixie adalah Seekor angsa <br>";
 echo "Mempunyai kaki sebanyak : ". $Nixie->jumlah_kaki."<br>";
 echo $Nixie->bisa_terbang. "<br>";
 echo "Nixie bersuara : ". $Nixie->bersuara(). "<br>";

 echo "<br><hr>";

 $Bernard = new Beruang;
 $Bernard->jumlah_kaki = 2;
 echo "Bernard adalah Seekor Beruang <br>";
 echo "Mempunyai kaki sebanyak : ". $Bernard->jumlah_kaki."<br>";
 echo $Bernard->bisa_terbang."<br>";
 echo "Bernard bersuara  : ". $Bernard->bersuara(). "<br>";

 echo "<br><hr>";
