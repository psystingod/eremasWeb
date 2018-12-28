<?php
    require_once('connection.php');
    /**
     * Clase para capturar los datos de la solicitud
     */
    class ProductsInfo extends ConectionDB
    {
        public function ProductsInfo()
        {
            parent::__construct ();
        }
        public function getCategories()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreCategoria FROM tbl_categoria";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
        public function getSubCategories()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreSubCategoria FROM tbl_subcategoria";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
        public function getMeasurements()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreUnidadMedida FROM tbl_unidadmedida";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
        public function getWarehouses()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreBodega FROM tbl_bodega";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
        public function getDepartments()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreDepartamento FROM tbl_departamento";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
        public function getProductType()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreTipoProducto FROM tbl_tipoproducto";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
        public function getProviders()
        {
            try {
                // SQL query para traer nombre de las categorías
                $query = "SELECT NombreProveedor FROM tbl_proveedor";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                $this->dbConnect = NULL;
                return $result;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
    }
?>
