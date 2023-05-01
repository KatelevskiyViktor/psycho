<!DOCTYPE html>
<html lang="en">
<head>

	<title>Психолог | Кателевский Виктор</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="Я Кателевский В. работаю КПТ психологом, член АКПП. Помогу справиться с тревожно-фобическими, тревожно-депрессивными и пр. расстройствами. Тел: 89508998686">
     <meta name="keywords" content="психолог Мурманск панические атаки кпт психолог когнитивно-поведенческий психолог ПА социофобия тревога депрессия разочарование в жизни страх бессилие помощь психолога Мурманск паника">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ route('home') }}" class="navbar-brand">Психолог | Кателевский Виктор</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Домой</a></li>
                         <li><a href="#feature" class="smoothScroll">О работе</a></li>
                         <li><a href="#about" class="smoothScroll">Обо мне</a></li>
                         <li><a href="#pricing" class="smoothScroll">Цены</a></li>
                         <li><a href="#contact" class="smoothScroll">Контакты</a></li>
                    </ul>

               </div>

          </div>
     </section>


     <!-- FEATURE -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <img src="{{asset('storage/images/psychologist_katelevskiy.png')}}" style="display: none">
                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3>помощь от кпт психолога</h3>
                              <h1>Связаться со мной: +79508998686</h1>
                             @include('alerts')
                              <form action="{{ route('send.two') }}" method="post" class="online-form">
                                  @csrf
                                   <input type="email" name="email2" id="email2" class="form-control @error('email2') is_invalid @enderror" placeholder="Введите свою почту" required>
                                   <button type="submit" class="form-control">Отправить</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Что вы получите</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Специалиста</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Опыт</a></li>

                              <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Образование</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Я:</h2>
                                        <p>Здравствуйте. Я психолог работающий в когнитивно-поведенческой психотерапии. Член Ассоциации когнитивно-поведенческой психотерапии.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>На данный момент работаю:</h2>
                                        <p>- с паническими атаками, агорафобией, тревогой, вегетативной симптоматикой и фиксацией на ней;<br>
                                            - с такими последствиями тревоги, как социофобия, трудность в общении с людьми, неуверенность в себе, избегание;<br>
                                            - с навязчивыми мыслями и действиями;<br>
                                            - с деструктивными эмоциями: вина, стыд, обида, гнев;<br>
                                            - с зависимостью от мнения окружающих, стереотипов, значимых людей;<br>
                                            - с депрессией, апатией, хронической усталостью, стрессом;<br>
                                            - с одиночеством, потерей смысла жизни;<br>
                                            - с переживанием расставания, эмоциональной зависимостью от другого человека
                                            и пр.</p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Личный опыт:</h2>
                                        <p>Имеется личный опыт по преодолению тревожно-фобического расстройства и депрессии, поэтому, я сам знаю как тяжело бывает в этих состояниях, как помочь с этим. Работаю в частной практике с 2016 года.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Методы:</h2>
                                        <p>Я предлагаю только научно обоснованные, опробованные методы КПТ, которые гарантированно приведут к положительному результату.</p>
                                   </div>
                                  <div class="tab-pane-item">
                                      <h2>Интервиз, терапия и супервизии</h2>
                                      <p>Около 2-х лет собственной терапии у КПТ специалистов. Для того чтобы решить вашу проблему быстрее и качественнее, взаимодействую с профессиональным сообществом в рамках интервизий и супервизий, где мы с коллегами обсуждаем индивидуальное, наиболее эффективное, решения для вас.</p>
                                  </div>

                              </div>

                              <div class="tab-pane" id="tab03" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Высшее образование</h2>
                                        <p>Получил высшее образование в Международном Институте Бизнес-Образования, по специальности: Психолог. Преподаватель психологии.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Повышение квалификации</h2>
                                        <p>Получил сертификат о повышении квалификации от ассоциация когнитивно-поведенческой психотерапии. И постоянно развиваюсь проходя разные курсы и посещая международные форумы АКПП.</p>
                                   </div>
                              </div>
                         </div>

                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="{{asset('storage/images/psychologist_katelevskiy2.png')}}" class="img-responsive" alt="Thin Laptop">
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1>Образование</h1>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="{{asset('storage/images/diplom.jpg')}}" class="img-responsive" alt="Andrew Orange">
                              <div class="team-info team-thumb-up">
                                   <h2>МИБО</h2>
                                   <small>Высшее образование</small>
                                   <p>Диплом о высшем образовании. Специальность: Психолог. Преподаватель психологии.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <div class="team-info team-thumb-down">
                                   <h2>АКПП</h2>
                                   <small>Повышение квалификации</small>
                                   <p>Сертификат о повышение квалификации в ассоциации когнитивно-поведенческой психотерапии.</p>
                              </div>
                              <img src="{{asset('storage/images/povishenie_kvalifikacii.jpg')}}" class="img-responsive" alt="Catherine Soft">
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="{{asset('storage/images/cbt_trevogi.jpg')}}" class="img-responsive" alt="Jack Wilson">
                              <div class="team-info team-thumb-up">
                                   <h2>АКПП</h2>
                                   <small>Пройденые курсы</small>
                                  <p>Один из многих курсов пройденных в ассоциации. Узнать больше о пройденных мною курсах можно по <a href="https://www.b17.ru/empirikk/">ССЫЛКЕ</a>.</p>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">

                              <div class="section-title">
                                   <h1>Отзывы</h1>
                              </div>

                              <div class="owl-carousel owl-theme">
                                   <div class="item">
                                        <h3>Сложно представить, что переживает человек, который проходит через паническое
                                            расстройство. Сталкиваешься с непониманием, как со стороны окружающих, так
                                            и близких людей. Что делает только хуже. И как хорошо, когда встречаются
                                            такие специалисты. Cложно представить, как бы я прошёл этот этап без
                                            понимания и профессионализма Виктора.</h3>
                                        <div class="testimonial-item">
                                             <img src="{{asset('storage/images/man_ava.jpg')}}" class="img-responsive" alt="Michael">
                                             <h4>Серегей</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Виктор человек с которым можно по-натоящему раскрыться и быть собой. Помог преодолеть сложный этап в моей жизни. Рада, что когда-то преслушалась к рекомендации своего друга, и пошла ради экспиремента к Виктору, хотя была в мыслях, что мне уже ничего не поможет...</h3>
                                        <div class="testimonial-item">
                                             <img src="{{asset('storage/images/woman_ava.jpg')}}" class="img-responsive" alt="Sofia">
                                             <h4>Виктория</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Огромное спасибо ещё раз хочу выразить Вам, у С. состояние нормализуется, первый раз обошлось без госпитализации, это для нас маленькая победа. Благодарю Вас</h3>
                                        <div class="testimonial-item">
                                             <img src="{{asset('storage/images/woman_ava.jpg')}}" class="img-responsive" alt="Monica">
                                             <h4>Л.</h4>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PRICING -->
     <section id="pricing" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Стоимость услуг</h1>
                         </div>
                    </div>


                   <div class="col-md-4 col-sm-6">
                         <div class="pricing-thumb">
                             <div class="pricing-title">
                                  <h2>Онлайн. Skype</h2>
                             </div>
                             <div class="pricing-info">
                                   <p>60 минут</p>
                             </div>
                             <div class="pricing-bottom">
                                   <span class="pricing-dollar">₽2800</span>
                                   <a href="#" class="section-btn pricing-btn">Записаться</a>
                             </div>
                         </div>
                    </div>


               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                        @include('alerts')
                         <form id="contact-form" role="form" action="{{ route('send') }}" method="post">
                             @csrf
                              <div class="section-title">
                                   <h1>Написать мне</h1>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control @error('name') is_invalid @enderror" placeholder="Имя" value="{{old('name')}}" id="name" name="name" required>
                                  @error('name')
                                  <div class="invalid_feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control @error('email') is_invalid @enderror" placeholder="Эл. почта" value="{{old('email')}}" id="email" name="email" required>
                                  @error('email')
                                  <div class="invalid_feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                             <div class="col-md-12 col-sm-12">
                                 <textarea class="form-control @error('message') is_invalid @enderror" rows="8" placeholder="Ваше сообщение" id="message" name="message" required>{{old('message')}}</textarea>
                                 @error('message')
                                 <div class="invalid_feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                             <div class="col-md-4 col-sm-4">
                                <span id="captcha-img">
                                    {!! captcha_img() !!}
                                </span>
                                 <button id="reload"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                         <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                         <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                     </svg></button>
                             </div>
                             <div class="col-md-4 col-sm-4">
                                 <input type="text" class="form-control @error('captcha') is_invalid @enderror" name="captcha" required placeholder="Введите буквы с картинки">
                                 @error('captcha')
                                 <div class="invalid_feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send message" value="Отправить">
                              </div>

                         </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2022 Viktor Katelevskiy | psychologist</p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="https://vk.com/psychologywithoutwater" class="fa fa-vk"></a></li>
                                   <li><a href="https://t.me/karpendiaZz" class="fa fa-telegram"></a></li>
                                   <li><a href="https://wa.me/79508998686" class="fa fa-whatsapp"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/app.js"></script>

</body>
</html>
