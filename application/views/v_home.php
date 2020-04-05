
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          
            <h1>Data COVID-19 di Indonesia</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item">Last Update : <?= $indo['lastUpdate']?></div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-surprise"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Positif</h4>
                  </div>
                  <div class="card-body">
                  <?= $indo['confirmed']['value']?> Orang
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-smile"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sembuh</h4>
                  </div>
                  <div class="card-body">
                  <?= $indo['recovered']['value']?> Orang
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-dizzy"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Meninggal</h4>
                  </div>
                  <div class="card-body">
                  <?= $indo['deaths']['value']?> Orang
                  </div>
                </div>
              </div>
            </div>
            </div>
                    
            <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Data COVID-19 di Indonesia berdasarkan Provinsi</h4>
              </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered">
                      <table class="table table-lg">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Positif</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($prov as $key => $value) { ?>
                            <tr>
                            <td> <?= $no++ ?> </td>
                            <td><?= $value['attributes']['Provinsi']?></td>
                            <td><?= $value['attributes']['Kasus_Posi']?></td>
                             <td><?= $value['attributes']['Kasus_Semb']?></td>
                            <td><?= $value['attributes']['Kasus_Meni']?></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                    </div>
                    </div>
          
        </section>
      </div>