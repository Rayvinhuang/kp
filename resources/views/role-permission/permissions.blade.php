<x-app-layout :assets="$assets ?? []">
    <div>
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title mb-0">Data Barang</h4>
                   </div>
                   <div class="text-center ms-3 ms-lg-0 ms-md-0">
                        <a href="#" class="mt-lg-0 mt-md-0 mt-3 btn btn-primary btn-icon" data-bs-toggle="tooltip" data-modal-form="form" data-icon="person_add" data-size="small" data--href="{{ route('permission.create') }}" data-app-title="Add new permission" data-placement="top" title="Tambah Barang">
                            <i class="btn-inner"> <!--Nah kalo kw nk buat fungsi Tambah barang kw beneri route ny be ke form tambah barang, kgk ak buati templateny-->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </i>
                            <span>Tambah Barang</span>
                        </a>
                   </div>
                </div>
                <div class="card-body">
                    <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped" data-toggle="data-table">
                          <thead>
                             <tr>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang Cash</th>
                                <th>Harga Barang Tempo</th>
                                <th> </th>
                             </tr>
                          </thead>
                          <tbody> <!--Ini untuk data barangny nah cb kw buat fungsi buat manggil dari database -->
                             <tr>
                                <td>1</td>
                                <td>Semen Baturaja</td>
                                <td>62000</td>
                                <td>63000</td>
                                <td>
                                    <div class="text-center ms-3 ms-lg-0 ms-md-0">
                                    <a href="#" class="mt-lg-0 mt-md-0 mt-3 btn btn-danger btn-icon" data-bs-toggle="tooltip" data-modal-form="form" data-icon="" data-size="small" data--href="{{ route('permission.create') }}" data-app-title="Add new permission" data-placement="top" title="Delete Barang">
                                        <i class="btn-inner"> <!--Nah kalo kw nk buat fungsi Tambah barang kw beneri route ny be ke form delete barang, kgk ak buati templateny-->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6\ w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                            </svg>
                                        </i>
                                        <span>Delete Barang</span>
                                    </a>
                                    </div>
                                </td>
                             </tr>
                          </tbody>
                          <tfoot><!--Ini Judul bagian bawah opsional si pake ap idkny -->
                             <tr>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang Cash</th>
                                <th>Harga Barang Tempo</th>
                                <th></th>
                             </tr>
                          </tfoot>
                       </table>
                    </div>
                 </div>
              </div>
             </div>
          </div>
       </div>
    </div>
    </x-app-layout>
