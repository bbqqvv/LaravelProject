 // Get the icon element
 const scrollToTopIcon = document.getElementById('scroll-to-top');

 // Show the icon when the user scrolls down 20px from the top of the document
 window.addEventListener('scroll', function() {
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     scrollToTopIcon.style.opacity = '1';
   } else {
     scrollToTopIcon.style.opacity = '0';
   }
 });

 // Smooth scroll to the top of the page when the icon is clicked
 scrollToTopIcon.addEventListener('click', function() {
   window.scrollTo({
     top: 0,
     behavior: 'smooth'
   });
 });