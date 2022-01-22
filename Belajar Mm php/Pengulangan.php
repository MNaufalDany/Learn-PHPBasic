<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> Belajar PHP </title>
    </head>
    <body>
        
        <h1>Loop PHP</h1>
        
        <?php  
        //---------- Pengulangan ----------
        //for(variabelawal(mulai); batas(syarat); perubahan)
        
         $hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];
         
         //------------------ 1) For loop ------------------
         
         
         // for ($i=0; $i < count($hewan) - 1; $i++)
         // {
         //   echo "------------------";
         //   echo $hewan[$i];
         //   echo "------------------ <br>";
         //
         // }
        
        
         // ------------------ 2) Foreach ------------------
         //  foreach($hewan as $h){
         //   echo "------------------";
         //   echo $h;
         //   echo "------------------ <br>";
         //  }
        
        
        //$data = ['nama' => 'hilman', 'umur'=>24, 'sifat'=> 'malas'];
        
        //foreach($data as $key => $value){
          // echo $value "<br>";
          // }
        
        
        //------------------ 3) While & do while ------------------
        //while(syarat)
		//harusnya bawah 5 tapi eror
        
        $i = 0;
       
       // while($i < count($hewan) ){
       // echo $hewan[$i]. "<br>";
       // $i++;
       // }
       
       do{
           echo '------';
           echo $hewan[$i]. "<br>";
           $i++;
       } while( $i < count($hewan));
        ?>
        
        
    </body>
</html>