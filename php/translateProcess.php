<?php

    require_once('connection.php');
    /**
     * Clase para traer los datos de productos seleccionados
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
                    // SQL query para traer datos de los productos
                    //(SELECT Nombre from tbl_bodega WHERE tbl_bodega.IdBodega = tbl_articulo.IdBodega)
                    $query = "SELECT IdArticulo, Nombre, Cantidad FROM tbl_articulo WHERE IdArticulo = $values[$i]";
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
