<?php
    require('connection.php');
    /**
     * Clase para ingresar productos al inventario
     */
    class translateSuccess extends ConectionDB
    {
        public function TranslateSuccess()
        {
            parent::__construct ();
        }
        public function updateWarehouses()
        {
            try {
                // SQL query para ingresar producto
                $id = $_POST["id"];
                $nombreArticulo = $_POST["nombreArticulo"];
                $nombreBodega = $_POST["nombreBodega"];
                $cantidad = $_POST["cantidad"];

                if (isset) {
                    // code...
                }
                $query = "INSERT INTO tbl_articulo(Codigo, NombreArticulo, Descripcion, Cantidad, PrecioCompra, PrecioVenta, FechaEntrada, IdUnidadMedida, IdTipoProducto, IdCategoria, IdSubCategoria, IdProveedor, IdBodega)
                          VALUES(:codigo, :nombre, :descripcion, :cantidad, :precioCompra, :precioVenta, :fechaEntrada, (SELECT tbl_unidadmedida.IdUnidadMedida FROM tbl_unidadmedida WHERE tbl_unidadmedida.NombreUnidadMedida = :unidadMedida),
                                (SELECT tbl_tipoproducto.IdTipoProducto FROM tbl_tipoproducto WHERE REPLACE(tbl_tipoproducto.NombreTipoProducto, ' ', '') = :tipoProducto), (SELECT tbl_categoria.IdCategoria FROM tbl_categoria WHERE tbl_categoria.NombreCategoria = :categoria),
                                (SELECT tbl_subcategoria.IdSubCategoria FROM tbl_subcategoria WHERE tbl_subcategoria.NombreSubCategoria = :subCategoria), (SELECT tbl_proveedor.IdProveedor FROM tbl_proveedor WHERE tbl_proveedor.NombreProveedor = :proveedor),
                                (SELECT tbl_bodega.IdBodega FROM tbl_bodega WHERE REPLACE(tbl_bodega.NombreBodega, ' ', '') = :bodega))";
                // Preparación de sentencia
                $statement = $this->dbConnect->prepare($query);
                $statement->execute(array(
                ':codigo' => $codigo,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':cantidad' => $cantidad,
                ':precioCompra' => $precioCompra,
                ':precioVenta' => $precioVenta,
                ':fechaEntrada' => $fechaEntrada,
                ':unidadMedida' => $unidadMedida,
                ':tipoProducto' => $tipoProducto,
                ':categoria' => $categoria,
                ':subCategoria' => $subCategoria,
                ':proveedor' => $proveedor,
                ':bodega' => $bodega
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
