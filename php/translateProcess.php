<?php

    require_once('connection.php');
    /**
     * Clase para traer los datos de los productos seleccionados
     */
    class TranslateProcess extends ConectionDB
    {
        public function TranslateProcess()
        {
            parent::__construct ();
        }
        public function getProductsTranslated()
        {
            try {
                $checkValues = $_POST['checkTraslado'];
                $values = array();
                foreach ($checkValues as $key) {
                    array_push($values, $key);
                }

                $queryResults = array();

                for ($i=0; $i < count($values) ; $i++) {
                    // SQL query para traer los datos de los productos
                    //(SELECT Nombre FROM tbl_bodega WHERE tbl_bodega.IdBodega = tbl_articulo.IdBodega)
                    $query = "SELECT IdArticulo, NombreArticulo, NombreBodega, Cantidad FROM tbl_articulo, tbl_bodega WHERE IdArticulo = $values[$i] AND tbl_articulo.IdBodega = tbl_bodega.IdBodega";
                    // Preparación de sentencia
                    $statement = $this->dbConnect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    array_push($queryResults, $result);
                }
                $this->dbConnect = NULL;
                //header('Location: ../pages/resumenTraslado.php');
                return $queryResults;


            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
    }
?>
