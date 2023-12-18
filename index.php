<!DOCTYPE html>
<html lang="en" class="max-width-d">

<?php include 'src/pages/head.php'; ?>

<body class="dark-arshia max-width-d">

    <!-- Preloader -->
    <div id="line-loader">
        <div class="middle-line"></div>
    </div>

    <!--   Menu Overlay Mobile -->
    <div class="menu-overlay d-none"></div>

    <!--   Right Side Start  -->
    <?php include 'src/pages/right_side_bar.php'; ?>
    <!--  Right Side End  -->

    <!--  Left Side Start  -->
    <?php include 'src/pages/left_side_bar.php'; ?>
    <!--  Left Side End  -->

    <!--  Main Start  -->
    <main id="main" class="main-2">

        <!--  Home Start  -->
        <?php include 'src/pages/home.php'; ?>
        <!--  Home End  -->

        <!--  About Start  -->
        <?php include 'src/pages/about.php'; ?>
        <!--  About End  -->

        <!--  Resume Start  -->
        <?php include 'src/pages/resume.php'; ?>
        <!--  Resume End  -->

        <!--  Portfolio Start  -->
        <?php include 'src/pages/portfolio.php'; ?>
        <!--  Portfolio End  -->

        <!--  Blog Start  -->
        <?php include 'src/pages/blog.php'; ?>
        <?php include 'src/pages/blogs/blog1.php'; ?>
        <!--  Blog End  -->

        <!-- Contact Start -->
        <?php include 'src/pages/contact.php'; ?>
        <!--  Contact End  -->

    </main>
    <!--  Main End  -->

    <!--  Mobile Next and Prev Button Start -->
    <div class="next-prev-page d-block d-lg-none">
        <button type="button" class="prev-page bg-base-color hstack">
        <i class="bi bi-chevron-compact-left mx-auto"></i>
      </button>
        <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
        <i class="bi bi-chevron-compact-right mx-auto"></i>
      </button>
    </div>
    <!--  Mobile Next and Prev Button End -->

    <!--  Navbar Button Mobile Start -->
    <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!--  Navbar Button Mobile End -->

    <!--  Background Shapes Start  -->
    <?php include 'src/pages/background_shapes.php'; ?>
    <!--  Background Shapes End  -->

    <!-- Mouase Magic Cursor Start -->
    <div class="m-magic-cursor mmc-outer"></div>
    <div class="m-magic-cursor mmc-inner"></div>
    <!-- Mouase Magic Cursor End -->

    <!--  JavaScripts  -->
    <?php include 'src/pages/js.php'; ?>
</body>

</html>