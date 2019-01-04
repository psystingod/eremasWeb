<?php
    require('connection.php');
    /**
     * Clase para capturar los datos de la solicitud
     */
    class GetInventory extends ConectionDB
    {
        public function GetInventory()
        {
            parent::__construct ();
        }
        public function showInventoryRecords($bodega)
        {
            try {
                if (isset($_POST["bodega"])) {
                    // SQL query para traer los datos de los productos
                    $query = "SELECT * FROM bdg_quelepa";
                    // Preparación de sentencia
                    $statement = $this->dbConnect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    $this->dbConnect = NULL;
                    return $result;
                }
                else {
                    // SQL query para traer los datos de los productos
                    $query = "SELECT * FROM bdg_santamaria";
                    // Preparación de sentencia
                    $statement = $this->dbConnect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                    $this->dbConnect = NULL;
                    return $result;

                }

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
    }
?>
