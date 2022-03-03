<header class="masthead" style="background-image: url('/public/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Видеоуроки PHP</h1>
                    <span class="subheading">простой блог на php - oop - mvc</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                 <p>Список постов пуст</p>
            <?php else: ?>
                 <?php foreach ($list as $val): ?>
            <div class="post-preview">
                <a href="/post/<?php echo $val['id']; ?>">
                    <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                    <h5 class="post-subtitle"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                </a>
                <p class="post-meta">Идентификатор этого поста <?php echo $val['id']; ?></p>
                </div>
                    <hr>
               <?php endforeach; ?>
                   <div class = "clearfix">
                   </div>
             <?php endif; ?>
                <hr>
                <div class="post-preview">
                    <a href="/main/post">
                        <h2 class="post-title">Название поста</h2>
                        <h5 class="post-subtitle">Описание поста</h5>
                    </a>
                    <p class="post-meta">Добавлено 2017.09.09</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="/main/post">
                        <h2 class="post-title">Название поста</h2>
                        <h5 class="post-subtitle">Описание поста</h5>
                    </a>
                    <p class="post-meta">Добавлено 2017.09.09</p>
                </div>
                <div class="post-preview">
                     <a href="/main/post">
                     <h2 class="post-title">Название поста</h2>
                     <h5 class="post-subtitle">Описание поста</h5>
                     </a>
                     <p class="post-meta">Добавлено 2017.09.09</p>
                </div>
                <div class="post-preview">
                     <a href="/main/post">
                    <h2 class="post-title">Название поста</h2>
                    <h5 class="post-subtitle">Описание поста</h5>
                     </a>
                <p class="post-meta">Добавлено 2017.09.09</p>
               </div>
               <div class="post-preview">
                   <a href="/main/post">
                    <h2 class="post-title">Название поста</h2>
                    <h5 class="post-subtitle">Описание поста</h5>
                </a>
                <p class="post-meta">Добавлено 2017.09.09</p>
               </div>
               <hr>
               <div class="clearfix">
                  <nav>
                      <ul class = "pagination">
                          <li class="page item disabled">
                              <span class="page-link">Вперед</span>
                          </li>
                          <li class="page item active">
                              <span class="page-link">1 <span class="sr-only">(current)</span> </span>
                          </li>
                          <li class="page item">
                              <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page item">
                              <a class="page-link" href="#">Назад</a>
                          </li>
                      </ul>
                  </nav>
               </div>
        </div>
    </div>
</div>


