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
        public function showInventoryRecords()
        {
                // SQL query para traer datos de los productos
                $query = "SELECT * FROM tbl_articulo";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                $this->dbConnect = NULL;
                return $result;

        }
    }
?>
