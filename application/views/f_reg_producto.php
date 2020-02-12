<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Cproducto/registrar_producto" method="post">
            <h2>REGISTRO DE PRODUCTO</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" placeholder="Nombre producto" name="nom_producto">
            <input type="number" placeholder="Cantidad" name="cantidad">
            <input type="text" placeholder="Detalle" name="detalle">
            <input type="number" placeholder="Precio Compra" name="pre_compra" step=".01">
            <input type="number" placeholder="Precio Venta" name="pre_venta" step=".01">
            <div class="sec-btn">
                <input type="submit" value="REGISTRAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>

        </form>

    </div>

</div>
</div>
