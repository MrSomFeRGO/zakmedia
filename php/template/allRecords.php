        <section class="text-center mb-3">
          <div class="row wow fadeIn">
            <?php
              $records = get_records_all();
              foreach($records as $record): ?>
                <div class="col-lg-3 col-md-6 mb-3">
                  <div class="card">
                    <div class="view overlay">

                      <img class="card-img-top"
                        src="<?php echo $record["img_src"] ?>" alt="Logo">
                      <a href="watch.php?id=<?php echo $record["id"] ?>">
                        <div class="mask rgba-white-slight"></div>
                      </a>


                      <div class="card-body text-center">

                        <a href="watch.php?id=<?php echo $record["id"] ?>" class="grey-text">
                          <h5><?php echo get_category() ?></h5>
                        </a>

                        <h5>
                          <strong>
                            <a href="watch.php?id=<?php echo $record["id"] ?>" class="dark-grey-text"><?php echo $record["title"] ?></a>
                          </strong>
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
        </section>
    </div>
  </main>