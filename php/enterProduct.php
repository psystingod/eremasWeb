<?php
    require('connection.php');
    /**
     * Clase para ingresar productos al inventario
     */
    class EnterProduct extends ConectionDB
    {
        public function EnterProduct()
        {
            parent::__construct ();
        }
        public function enter()
        {
            try {
                // SQL query para ingresar producto
                $codigo = $_POST["codigo"];
                $nombre = $_POST["nombre"];
                $descripcion = $_POST["descripcion"];
                $subCategoria = $_POST["subCategoria"];

                $query = "INSERT INTO tbl_articulo(Codigo, NombreArticulo, Descripcion, IdSubCategoria) VALUES(:codigo, :nombre, :descripcion, (SELECT tbl_subcategoria.IdSubCategoria FROM tbl_subcategoria WHERE tbl_subcategoria.Nombre = :subCategoria))";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                ':codigo' => $codigo,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':subCategoria' => $subCategoria
                ));

                $this->dbConnect = NULL;
                header('Location: ../pages/inventario.php?status=success');

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
                header('Location: ../pages/inventario.php?status=failed');
            }
        }
    }
    $enter = new EnterProduct();
    $enter->enter();
?>
