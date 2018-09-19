// Scroll to a certain element
takeMeThere = (section) => {
    document.querySelector(section).scrollIntoView({ 
    behavior: 'smooth' 
  });
}