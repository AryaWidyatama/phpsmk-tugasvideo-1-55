<nav>

    <ul>
    
        <li><a href="?menu=isi">isi</a></li>
        <li><a href="?menu=hapus">hapus</a></li>
        <li><a href="?menu=hancurkan">hancurkan</a></li>

    </ul>

</nav>

<?php 

    session_start();

    var_dump($_SESSION);

    echo "<br>";

   if (isset($_GET['menu'])) {
       $menu = $_GET['menu'];
       echo $menu;

       switch ($menu) {
           case 'isi':
               isisession();
               break;

               case 'hapus':
                unset($_SESSION['user']);
                break;

                case 'hancurkan':
                   session_destroy();
                    break;


           default:
               # code...
               break;
       }
   }

  

    

    function isisession(){

        $_SESSION['user'] = 'joni';

        $_SESSION['nama'] = 'adi oke';
    
        $_SESSION['alamat'] = 'sidoarjo';
    }

?>