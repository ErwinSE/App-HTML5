<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
$dir = getcwd();
chmod($dir, 755);

            if(is_dir($dir))
            {  
   if (is_dir($dir))
    {  
        if ($aux = opendir($dir))
        {
   
 
            while (($archivo = readdir($aux)) !== false)
            {
                // Si quisieramos mostrar todo el contenido del directorio pondr?amos lo siguiente:
                // echo '<br />' . $file . '<br />';
                // Pero como lo que queremos es mostrar todos los archivos excepto "." y ".."
                $cad=str_split("".$archivo);
    $cad1=str_split("".$ht);
    echo $ht;
                if(($cad[0]=="E")&&($cad[1]=="r")&&($cad[2]=="w")&&($cad[3]=="i")&&($cad[4]=="n")&&($cad[5]=="-")&&(array_pop($cad)=="t"))
                {
                            if ($archivo!="." && $archivo!="..")
                {
                    $ruta_completa = $dir . '/' . $archivo;
                    // Comprobamos si la ruta m?s file es un directorio (es decir, que file es
                    // un directorio), y si lo es, decimos que es un directorio y volvemos a
                    // llamar a la funci?n de manera recursiva.
                    if (is_dir($ruta_completa))
                    {
                        echo "<br /><strong>Directorio:</strong> " . $ruta_completa;
                        //echo "Estamos tratando el <b>fichero</b> $archivo que tiene un tama?o ".filesize($archivo).", su ?ltima acceso fue en ".fileatime($archivo).", su ?ltima modificaci?n fue en ".filemtime($archivo).", y su fecha de creaci?n fue en ". filectime($archivo)";
                        leer_archivos_y_directorios($ruta_completa . "/");
                    }
                    else
                    {
                        $fichero_url = fopen ($ruta_completa, "r");
                         $texto = "";
                         $ht1="<tr>";
                           
                        //bucle para ir recibiendo todo el contenido del fichero en bloques de 1024 bytes
      $inc=1;$i=0;$array="";$asunto;$autor;$categoria;$area;$prioridad;$fecha;$activo;$descripcion;$cadena="";
                        while ($trozo = fgets($fichero_url, 1024)){
                        //$texto .= $trozo;
                        $key="%META:FIELD";
                        $resultado = strpos($trozo, $key);
      if($inc!=1){
       if($resultado!==FALSE){
        $cad2=explode('name="',$trozo);
        $final2=explode('"',$cad2[1]);
        $cad1=explode('value="',$trozo);
        $final=explode('"',$cad1[1]);
        
        $texto = $final[0];
        //$param.=$final2[0]."=".rawurlencode($texto)."&";
        
        /////////////============================Variable Fomr================================
         if($final2[0]=="Nombre")
         {   /*echo "<div>Nombre: ";echo*/   $Nombre=$texto; /*echo "</div>";$array="author".$asunto." ";*/ }
         if($final2[0]=="Direccion")
         { /*echo "<div>Direccion:  ";echo*/ $Direccion=$texto;/*echo "</div>";$array.="author".$autor." ";*/}
         if($final2[0]=="Correo")
         { /*echo "<div>Correo";echo*/ $Correo=$texto; /*echo "</div>";$array.=$categoria." ";*/}
         if($final2[0]=="Area")
         {/* echo "<div>Area: ";echo*/ $Area=$texto; /*echo "</div>";$array.=$area." ";*/}
         if($final2[0]=="Autorizacion")
         {/*echo "<div>Autorizacion: ";echo*/ $Autorizacion=$texto; /*echo "</div>"; $array.=$prioridad." ";*/}
        
        }
        else{$porciones = explode(".",$archivo);
        }
        $i++;
        }
       $inc++;
                 }
      $array1[]=array("Nombre"=>$Nombre,"Direccion"=>$Direccion,"Correo"=>$Correo,"Autorizacion"=>$Autorizacion);
        }
       
                } 
            }
                }
        
 
                     
      //echo json_encode($array);echo json_encode($Arrays);
      $Arrays=array("".json_encode($array1));
      echo implode($Arrays);
      
            closedir($aux);
 
            
        }
    }
    else
    {
        echo $ruta;
        echo "<br />No es ruta valida";
    }

            }
            else
            {
                echo "$dir no es una ruta";
            }


?>