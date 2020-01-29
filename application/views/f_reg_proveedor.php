<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Cproveedor/registrar_proveedor" method="post">
            <h2>REGISTRO DE PROVEEDOR</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" placeholder="Nombre empresa" name="nom_empresa" required>
            <input type="text" placeholder="Encargado" name="encargado" required>
            <input type="number" placeholder="Celular" name="celular" required>
            <input type="text" placeholder="Direccion" name="direccion" required>
            <div class="sec-btn">
                <input type="submit" value="REGISTRAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>