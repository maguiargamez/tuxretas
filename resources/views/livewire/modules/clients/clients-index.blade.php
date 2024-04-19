<div>
    <livewire:templates.breadcrumb 
        :title=$title
        :titleIcon=$titleIcon
        :breadcrumb=$breadcrumb
    />

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Lista de clientes</h5>
                        <div class="flex-shrink-0">
                           <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Nuevo cliente</button>
                                <button class="btn btn-soft-primary" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <form>
                        <div class="d-flex align-items-center">
                            <div class="card-title mb-0 flex-grow-1">
                                <div class="col-xxl-5 col-sm-12">
                                    <div class="search-box">
                                        <input type="text" class="form-control search bg-light border-light" placeholder="Buscar...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                               <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-light w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                    Filtros
                                </button>
                               </div>
                            </div>
                        </div>

                    </form>
                </div>
                
                <div class="card-body">


                    <div class="table-responsive table-card mb-4">


                        <table class="table table-hover table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="option1">
                                        </div>
                                    </th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col" style="width: 50px;">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ( $items as $index => $item )
                                    <tr>
                                        <td scope="row">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="option1">
                                            </div>
                                        </td>
                                        <td scope="row">{{ $item->firstname." ".$item->lastname }}</td>
                                        <td scope="row">{{ $item->email }}</td>
                                        <td scope="row">{{ $item->phone }}</td>
                                        <td scope="row"></td>
                                    </tr>
                                @empty
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Lo siento! No se han encontrado resultados</h5>
                                        <p class="text-muted mb-0">Hemos realizado la busqueda sin encontrar resultados.</p>
                                    </div>
                                @endforelse
                            </tbody>
                            
                        </table>


                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <div class="pagination-wrap hstack gap-2" style="display: flex;">
                            {{ $items->links() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
