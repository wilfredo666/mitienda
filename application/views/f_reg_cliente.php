<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Ccliente/registrar_cliente" method="post">
            <h2>REGISTRO DE CLIENTE</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" placeholder="Nombre(s) cliente" name="nom_cliente" required>
            <input type="text" placeholder="Apellido(s)" name="ap_cliente" required>
            <input type="number" placeholder="CI / NIT" name="ci_nit" required>
            <input type="number" placeholder="Celular" name="celular" required>
            <input type="text" placeholder="Direccion" name="direccion" required>
            <div class="sec-btn">
                <input type="submit" value="RESGISTRAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>