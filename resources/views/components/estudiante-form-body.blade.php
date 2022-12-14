<Style>
    body {
        background: url("https://static.vecteezy.com/system/resources/previews/004/941/860/non_2x/technology-abstract-design-space-dark-background-with-connecting-dots-and-lines-for-posters-or-web-page-template-futuristic-technology-element-illustration-eps10-vector.jpg")
    }

</Style>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<font face=”Arial” COLOR="white">
    
    <div>
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombres" class="form-label">Ingrese los Nombres</label>
                <input type="text" name="nombres" id="InputNombres" class="form-control" placeholder="..." value="{{ old('nombres', $estudiante->nombres) }}">
                <br>
            </div>

            <div class="col-sm-12">
                <label for="InputApellidos" class="form-label">Ingrese los Apellidos</label>
                <input type="text" name="apellidos" id="InputApellidos" class="form-control" placeholder="..." value="{{ old('apellidos', $estudiante->apellidos) }}">
            </div>

            <div class="row-sm">
                <label for="InputFechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="InputFechaNacimiento" class="form-control" value="{{ old('fecha_nacimiento', is_null($estudiante->fecha_nacimiento) ? '' : $estudiante->fecha_nacimiento->format('Y-m-d')) }}">
            </div>

            <div class="col-sm-12">
                <br>
                <label for="id_carrera" class="form-label">Elija la Carrera</label>
                <br>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'pweb')
                or die ('Cannot connect to db');
                $result = $conn->query("select id_carrera, nombre_carrera from carreras");
                echo "<html>";
                echo "<body>";
                echo "<select name='id_carrera'>";
                while ($row = $result->fetch_assoc()) {
                unset($id_carrera, $nombre_carrera);
                $id_carrera = $row['id_carrera'];
                $nombre_carrera = $row['nombre_carrera'];
                echo '<option value="'.$id_carrera.'">'.$nombre_carrera.'</option>';
                }
                echo "</select>";
                echo "</body>";
                echo "</html>";
            ?>
            </div>
            <br>
            <div class="col-sm-4">
                <br>
                <label for="InputSexo" class="form-label">Elija el Sexo</label>
                <br>
                <select name="sexo" id="InputSexo">
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                <script>
                    document.getElementById('InputSexo').value = "{{ old('sexo', $estudiante->sexo) }}";

                </script>
            </div>

            <div class="col-sm-4">
                <br>
                <label for="InputEstadoCivil" class="form-label">Estado Civil</label>
                <br>
                <select name="estado_civil" id="InputEstadoCivil">
                    <option value="S">Soltero</option>
                    <option value="C">Casado</option>
                    <option value="V">Viudo</option>
                    <option value="D">Divorciado</option>
                </select>
                <script>
                    document.getElementById('InputEstadoCivil').value = "{{ old('estado_civil', $estudiante->estado_civil) }}";

                </script>
            </div>

            <div class="col-sm-4">
                <br>
                <label for="InputStatus" class="form-label">Elija el Estatus</label>
                <br>
                <select name="status" id="InputStatus">
                    <option value="I">Inactivo</option>
                    <option value="A">Activo</option>
                </select>
                <script>
                    document.getElementById('InputStatus').value = "{{ old('status', $estudiante->status)  }}";
                </script>
            </div>

            <div class="col-sm-12">
                <br>
                <label for="id_campus" class="form-label">Elija el Campus</label>
                <br>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'pweb')
                or die ('Cannot connect to db');
                $result = $conn->query("select id_campus, descripcion from campus");
                echo "<html>";
                echo "<body>";
                echo "<select name='id_campus'>";
                while ($row = $result->fetch_assoc()) {
                unset($id_campus, $descripcion);
                $id_campus = $row['id_campus'];
                $descripcion = $row['descripcion'];
                echo '<option value="'.$id_campus.'">'.$descripcion.'</option>';
                }
                echo "</select>";
                echo "</body>";
                echo "</html>";
            ?>
            </div>

            <div class="col-sm-12">
                <br>
                <label for="id_pais" class="form-label">Elija el Pais de Nacimiento</label>
                <br>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'pweb')
                or die ('Cannot connect to db');
                $result = $conn->query("select id_pais, descripcion from paises");
                echo "<html>";
                echo "<body>";
                echo "<select name='id_pais'>";
                while ($row = $result->fetch_assoc()) {
                unset($id_pais, $descripcion);
                $id_pais = $row['id_pais'];
                $descripcion = $row['descripcion'];
                echo '<option value="'.$id_pais.'">'.$descripcion.'</option>';
                }
                echo "</select>";
                echo "</body>";
                echo "</html>";
            ?>
            </div>

            <div class="row-sm">
                <br>
                <label for="InputFechaIngreso" class="form-label">Fecha de Ingreso</label>
                <input type="date" name="fecha_ingreso" id="InputFechaIngreso" class="form-control" value="{{ old('fecha_ingreso', is_null($estudiante->fecha_ingreso) ? '' : $estudiante->fecha_ingreso->format('Y-m-d')) }}">
            </div>

            <div class="col-sm-12 text-center my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>
    </div>
</font>
