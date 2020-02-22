<center>
    <h2>REGISTRO DE VENTA</h2>
    <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
</center>
<!--ormulario de venta-->
<div class="row">
    <div class="form-group col-md-6">
        <form>
            <div class="row">
                <div class="form-group col-md-6">
                    <select class="form-control" id="producto">
                        <option>Seleccionar producto</option>
                        <?php 
                        foreach($lista_producto as $producto){
                            $id_producto=$producto->id_producto;
                            $nom_producto=$producto->nombre_producto;
                            $cantidad=$producto->cantidad;
                            $precio_venta=$producto->precio_venta;
                        ?>
                        <option value="<?php echo $nom_producto;?>-<?php echo $id_producto;?>-<?php echo $precio_venta;?>-<?php echo $cantidad;?>"><?php echo $nom_producto;?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <select id="cliente" class="form-control">
                        <option value="">Seleccionar cliente</option>
                        <?php 
                        foreach($lista_cliente as $cliente){
                            $id_cliente=$cliente->id_cliente;
                            $nom_cliente=$cliente->nombre;
                        ?>
                        <option value="<?php echo $id_cliente;?>"><?php echo $nom_cliente;?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="Cantidad" id="cantidad" required>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="Total x" id="total" required step=".01">
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="Pago x" id="pago" required step=".01">
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="Cambio x" id="cambio" required step=".01">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <input class="btn btn-primary" type="button" value="AGREGAR" onclick="AgregarVenta();">
                </div>
                <div class="form-group col-md-6">
                    <input class="btn btn-danger" type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
                </div>
            </div>
        </form>
    </div>
    <!--lista de venta-->
    <div class="form-group col-md-6">
        <table class="table">
            <thead class="thead-dark">
                <tr class="bg-primary">
                    <th scope="col">Detalle</th>
                    <th scope="col">P. Unitario</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Importe</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="lista_ventas">
            </tbody>
            <tr>
                <th></th>
                <th></th>
                <td scope="row">Importe total</td>
                <td></td>
            </tr>
        </table>
        <div id="respuesta"></div>
    </div>

