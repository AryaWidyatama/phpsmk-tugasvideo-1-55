<h3>Daftar Belanja</h3><hr>

<?php 

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    unset($_SESSION['_'.$id]);

    
}

    if (isset($_GET['tambah'])) {
       $id = $_GET['tambah'];
       $_SESSION['_'. $id]++;
    }

    if (isset($_GET['kurang'])) {
        $id = $_GET['kurang'];
        $_SESSION['_'. $id]--;

        if ($_SESSION['_'. $id]==0) {
           unset($_SESSION['_'.$id]);
        }
        
     }
 

    if (!isset($_SESSION['pelanggan'])) {
        header("location:?f=home&m=login");

    }else{
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $id = $_GET['id'];
            isi($id);
           header("location:?f=home&m=beli");
        }else {
            keranjang();
        }

    }


    

    function isi($id)
    {
        if (isset($_SESSION['_'.$id])) {
            $_SESSION['_'.$id]++;
        }else {
            $_SESSION['_'.$id]=1;
        }
    }

    function keranjang()
    {

        global $db;

        $total = 0;





        echo '
        
                <table class="table w-70">
           
                <tr>
                    <th class="bg-primary">Menu</th>
                    <th class="bg-primary">Harga</th>
                    <th class="bg-primary">Jumlah</th>
                    <th class="bg-primary">Total</th>
                    <th class="bg-primary">Hapus</th>
                </tr>
            
            
        
        
        ';

        foreach ($_SESSION as $key => $value) {
            if ($key<>'pelanggan' && $key<>'idpelanggan') {
                $id = substr($key,1);

                $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";

                $row = $db->getALL($sql);

                foreach ($row as $r) {
                    echo ' <tr>';
                   echo '<td>'. $r['menu']. '</td>';
                   echo '<td>Rp.'. $r['harga']. '</td>';
                   echo '<td><a href="?f=home&m=beli&tambah='.$r['idmenu'].'">[+]</a>&nbsp &nbsp'. $value. '&nbsp &nbsp<a href="?f=home&m=beli&kurang='.$r['idmenu'].'">[-]</a></td>';
                   echo '<td>Rp.'. $r['harga'] * $value. '</td>';
                   echo '<td> <a href="?f=home&m=beli&hapus='.$r['idmenu'].'">Hapus</a></td>';
                   echo '</tr>';
                   $total = $total + ($value * $r['harga']);

                }

                
            }
           
            
        }

        echo '<tr>
            <td colspan=4><h3>Jumlah Total</h3></td>
            <td><h3>Rp.'.$total.'</h3></td>
        </tr>';

        echo '</table>';
    }

    

?>