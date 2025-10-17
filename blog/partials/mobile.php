<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>

<style>
/* ---------- RESET ---------- */
* { box-sizing: border-box; margin: 0; padding: 0; }
ul { list-style: none; }

/* ---------- BASE ---------- */
.menu-item {
  position: relative;
  display: inline-block;
}

.menu-toggle {
  display: inline-block;
  padding: 10px 16px;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  cursor: pointer;
}

/* ---------- DROPDOWN ---------- */
.menu-list {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  z-index: 9999;
  width: 240px;
  padding: 8px 0;
}

.menu-list li a {
  display: block;
  padding: 10px 16px;
  color: #000;
  text-decoration: none;
}

.menu-list li a:hover {
  background: #f2f2f2;
}

/* ---------- DESKTOP HOVER ---------- */
@media (min-width: 769px) {
  .menu-item:hover .menu-list {
    display: block;
  }
}

/* ---------- MOBILE CLICK ---------- */
@media (max-width: 768px) {
  .menu-list {
    position: relative;
    width: 100%;
    border: 1px solid #ddd;
  }

  .menu-list.show {
    display: block;
  }

  /* ❌ Important: Disable hover on mobile completely */
  /* ❌ REMOVE hover override here completely */
  .menu-item:hover .menu-list {
    /* display: none !important; */
  }

}
</style>
</head>
<body>

<ul>
  <li class="menu-item">
    <a href="#" class="menu-toggle">What We Do ▾</a>
    <ul class="menu-list">
      <li><a href="web-app-development">Web Development</a></li>
      <li><a href="mobile-app-development">App Development</a></li>
      <li><a href="custom-software-development">Custom Software Dev</a></li>
      <li><a href="ui-ux-design">UI/UX Design</a></li>
      <li><a href="ecommerce">E-Commerce</a></li>
      <li><a href="design-and-development">Design & Development</a></li>
      <li><a href="devops">DevOps</a></li>
      <li><a href="maintainance-and-support">Maintenance & Support</a></li>
      <li><a href="staff-augmentation">Staff Augmentation</a></li>
      <li><a href="blog">News & Events</a></li>
      <li><a href="blog-2">Project Management</a></li>
      <li><a href="join">Jobs & Careers</a></li>
    </ul>
  </li>
</ul>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const menuItems = document.querySelectorAll(".menu-item");

  menuItems.forEach(item => {
    const toggle = item.querySelector(".menu-toggle");
    const menu = item.querySelector(".menu-list");

    toggle.addEventListener("click", function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();

        // If it's already open, close it
        if (menu.classList.contains("show")) {
          menu.classList.remove("show");
        } else {
          // Close any other open menus
          document.querySelectorAll(".menu-list").forEach(m => m.classList.remove("show"));
          // Open this one
          menu.classList.add("show");
        }
      }
    });

    // Allow inside links to work normally
    menu.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        menu.classList.remove("show");
      });
    });
  });
});
</script>

</body>
</html>
