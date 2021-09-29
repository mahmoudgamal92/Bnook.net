<nav class="navbar navbar-expand-md navbar-light" style="margin:0;">
    <a class="navbar-brand color-style" href="index.php">
        <img src="./images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-icon"></div>
        <div class="navbar-icon"></div>
        <div class="navbar-icon"></div>
    </button>
    <div class="navbar_collapse" id="navbarSupportedContent">
        <i class="fas fa-times close" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></i>
        <i class="fas fa-close" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></i>
        <ul id="nav" class="navbar-nav list-before">
            <li>
                <h2 style="color:darkgoldenrod;
                  font-family: 'Reem Kufi', sans-serif;">بنوك
                </h2>
            </li>
            <li class="nav-item">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a class="nav-link color-theme" href="news.php" style="
                  color:  #008060;
                  font-family: 'Cairo', sans-serif;
                  font-weight: bold;">
                الأخبار
                </a>
            </li>
            <li class="nav-item">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a class="nav-link color-theme" href="reports.php" style="
                  color:  #008060;
                  font-family: 'Cairo', sans-serif;
                  font-weight: bold;">أراء و تحليلات
                </a>
            </li>
            <li class="nav-item" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a onclick="document.getElementById('filter_modal').style.display='block'" class="nav-link color-theme" style="
                  color:  #008060;
                  font-family: 'Cairo', sans-serif;
                  font-weight: bold;">الفلتر الشرعي للأسهم
                </a>
            </li>
      
            
            <li class="nav-item">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a onclick="document.getElementById('usa_stocks_modal').style.display='block'" class="nav-link color-theme" style="
                    color:  #008060;
                    font-family: 'Cairo', sans-serif;
                    font-weight: bold;">
                    <img src="images/usa.png" style="width:28px;height:28px;padding:2px">
                    الأسهم الأمريكية

                </a>
            </li>

            <li class="nav-item">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a onclick="document.getElementById('rating_modal').style.display='block'" class="nav-link color-theme" style="
                    color:  #008060;
                    font-family: 'Cairo', sans-serif;
                    font-weight: bold;">
                    فلتر التقييمات

                </a>
            </li>

            <li class="nav-item">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a class="nav-link color-theme" href="Gold&metals.php" style="color:  #008060;
                    font-family: 'Cairo', sans-serif;
                    font-weight: bold;">الذهب والمعادن</a>
            </li>
            <li class="nav-item">
                <i class="fas fa-atom icon" style="color: #808000"></i>
                <a class="nav-link color-theme" href="currencyPrice.php" style="
                  color:  #008060;
                  font-family: 'Cairo', sans-serif;
                  font-weight: bold;">أسعار العملات
                </a>
            </li>

            <li>
            <i class="fas fa-atom icon" style="color: #808000"></i>
                <a class="nav-link color-theme" onclick="document.getElementById('signin_modal').style.display='block'"  style="
                  color:  #008060;
                  font-family: 'Cairo', sans-serif;
                  font-weight: bold;">
              تسجيل الدخول
                </a>
            </li>

            <ul class="social">
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i> </a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </li>
            </ul>
        </ul>
</nav>



<div id="filter_modal" class="w3-modal" style="z-index:999999999999999">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:800px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('filter_modal').style.display='none'" 
        class="w3-button w3-xlarge w3-hover-red w3-display-topright" 
        title="Close Modal">&times;</span>
        <img src="images/logo.png" alt="Avatar" style="width:20%" class="w3-circle">
      </div>
        <p style="text-align:right;color:#1f3c87;padding:20px;font-size:17px;direction:rtl">
        "
         قامت الهيئات الشرعية بإصدار معايير للتعامل بالأسهم ذات ضوابط تتماشى مع تعاليم
        الدين الاسلامي ويتطلب تنفيذ هذه الضوابط جمع البيانات المالية عن تلك الاسهم
        واجراءات الحسابات عليها للتأكد من انها اجتازت تلك الضوابط علماً انه يوجد اختلاف بسيط فالبعض فمثلاً عند حساب القروض  يعتمد على متوسط القيمة السوقية للشركة لآخر ربع وليس القيمة السوقية الحالية كما هو شائع حاليا لدى المتعاملين. بينما اعتمدت بعض الهيئات على إجمالي الأصول عند حساب القروض. وحتى نضمن عدم تعطل الفلتر من المصدر فقد تم تطوير فلترين من مصادر معتمدة أحدهما يحدث أُسْبُوعِيًّا والاخر شهرياً. وفي حال تعطل أحدهما يتم استخدام الآخر.

        "
        </p>
      <form class="w3-container" action="Result.php" method="post">
        <div class="w3-section" style="text-align:right;direction:rtl">        
          <input class="w3-input w3-border w3-margin-bottom" type="text" 
          placeholder="أدخل كود الشركة" name="filter_symbol" required
          style="direction:rtl;text-align:right"
          >
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">
          تأكيد
          </button>
        </div>
      </form>
    </div>
  </div>



<div id="usa_stocks_modal" class="w3-modal" style="z-index:999">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
            <span onclick="document.getElementById('usa_stocks_modal').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="images/usa.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="usa_stocks.php" method="post">
            <div class="w3-section">
                <label><b>Company Code:</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Company Code"
                    name="symbol" required>
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
                <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember Company
            </div>
        </form>
    </div>
</div>


<div id="rating_modal" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
            <span onclick="document.getElementById('rating_modal').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="images/logo.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="rating_filter.php" method="post">
            <div class="w3-section">
                <label><b>Company Code:</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Company Code"
                    name="filter_symbol" required>
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
                <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember Company
            </div>
        </form>
    </div>
</div>


<div id="signin_modal" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
            <span onclick="document.getElementById('signin_modal').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="images/logo.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="signin.php" method="POST">
            <div class="w3-section">
                <label style="width:100%;text-align:right;direction:rtl">
                أدخل البريد  الألكتروني الخاص بك :
               </label>
                <input class="w3-input w3-border w3-margin-bottom" 
                style="direction:rtl;text-align:right"
                type="text" 
                placeholder="أدخل عنوان البريد الألكتروني الخاص بك"
                    name="email" required>

                    <label style="width:100%;text-align:right;direction:rtl">
                     كلمة السر:
                    </label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" 
                style="direction:rtl;text-align:right"
                placeholder="أدخل كلمة السر الخاصة بك :"
                    name="pwd" required>
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">تسجيل الدخول</button>
                    <a style="color:#008037" href="#" onclick="switch_modals()">
                <span style="text-align:right;width:100%">
                ليس لديك حساب ؟ أنشئ حساب جديد
                </p>
               </span>
            </div>
        </form>
    </div>
</div>



<div id="signup_modal" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
            <span onclick="document.getElementById('signup_modal').style.display='none'"
                class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="images/logo.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="signup.php" method="post">
            <div class="w3-section">

            <label style="width:100%;text-align:right;direction:rtl">
                أدخل أسم المستخدم الخاص بك :
               </label>
                <input class="w3-input w3-border w3-margin-bottom" 
                style="direction:rtl;text-align:right"
                type="text" 
                placeholder="أدخل أسم المستخدم الخاص بك"
                    name="user_name" required>

                <label style="width:100%;text-align:right;direction:rtl">
                أدخل البريد  الألكتروني الخاص بك :
               </label>
                <input class="w3-input w3-border w3-margin-bottom" 
                style="direction:rtl;text-align:right"
                type="text" placeholder="أدخل عنوان البريد الألكتروني الخاص بك"
                 name="email" required>
                    <label style="width:100%;text-align:right;direction:rtl">
                        أدخل رقم الهاتف الخاص بك :
                    </label>
                <input class="w3-input w3-border w3-margin-bottom" 
                style="direction:rtl;text-align:right"
                type="text" 
                placeholder="أدخل رقم الهاتف الخاص بك"
                    name="phone" required>

                    <label style="width:100%;text-align:right;direction:rtl">
                     كلمة السر:
                    </label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" 
                style="direction:rtl;text-align:right"
                placeholder="أدخل كلمة السر الخاصة بك :"
                    name="pwd" required>
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">تسجيل الدخول</button>
                    <a style="color:#008037" href="#" onclick="switch_modals()">
                <span style="text-align:right;width:100%">
                لديك حساب ؟ تسجيل الدخول
               </span>
               </a>
            </div>
        </form>
    </div>
</div>