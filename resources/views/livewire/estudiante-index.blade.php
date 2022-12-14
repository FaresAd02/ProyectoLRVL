<Style>
    body {
        background: url("https://static.vecteezy.com/system/resources/previews/004/941/860/non_2x/technology-abstract-design-space-dark-background-with-connecting-dots-and-lines-for-posters-or-web-page-template-futuristic-technology-element-illustration-eps10-vector.jpg")
    }

</Style>


<div>
    {{--<div class="row bg-transparent justify-content-center align-items-center">

        <div class="col-sm-9">
            <input type="text" name="" id="" placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
    </div>--}}
    <table class="table table-stripped table-hover bg-transparent">
        <thead>
            <tr>
                <th>
                    <font color="white">
                        Nombres
                    </font>
                </th>
                <th>
                    <font color="white">
                        Apellidos
                    </font>
                </th>
                <th>
                    <font color="white">
                        Fecha de Nacimiento
                    </font>
                </th>
                <th>
                    <font color="white">
                        Carrera
                    </font>
                </th>
                <th>
                    <font color="white">
                        Sexo
                    </font>

                </th>
                <th>
                    <font color="white">
                        Estado Civil
                    </font>
                </th>
                <th>
                    <font color="white">
                        Estatus
                    </font>

                </th>
                <th>
                    <font color="white">
                        Campus
                    </font>

                </th>
                <th>
                    <font color="white">
                        Pais
                    </font>
                </th>
                <th>
                    <font color="white">
                        Fecha de Ingreso
                    </font>

                </th>
                <th>
                    <font color="white">
                        Opciones
                    </font>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiante as $estudiante)
            <tr>
                <td>
                    <font color="white">
                        {{ $estudiante->nombres }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->apellidos }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->fecha_nacimiento->format('d / m / y') }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->id_carrera() }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->sexo }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->estado_civil }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->status }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->id_campus() }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->id_pais() }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        {{ $estudiante->fecha_ingreso->format('d / m / y') }}
                    </font>
                </td>
                <td>
                    <font color="white">
                        <button type="submit" class="btn btn-success">
                            <a href="{{ route('estudiante.edit', $estudiante) }}">
                                <font color="white">Editar</font>
                            </a>

                        </button>
                    </font>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
