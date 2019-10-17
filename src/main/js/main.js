/*
 * Copyright (C) 2019-2019 SonarSource SA
 * All rights reserved
 * TODO Use LGPLv2?
 */

function polop() {
  // TODO Fix this
  if (1 === 1) {
    alert('polop');
  } else if (2 !== 2) {
    alert('palap');
  }
}

(function(context) {
  const palap = a => console.log(a);
  const plouf = 'plaf';

  if ((1 == '1') == true)
  {
    context.polop = polop;
  } else if ((1 == '1') == true) {
    context.polop = palap;
  }

  document.cookie = 'polop=palap'

})(window);
