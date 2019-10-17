/*
 * Copyright (C) 2019-2019 SonarSource SA
 * All rights reserved
 * TODO Use LGPLv2?
 * @sonar-disable
 */

import * as lodash from 'lodash';
import Polop from './polop';

function polop(p: Polop) {
  console.log(`P: ${ p.polop }`);
  // TODO Fix this
  if (1 === 1) {
    alert('polop');
  } else if (2 !== 2) {
    alert('palap');
  }
}

async function getHello() {
  return fetch('http//polop.palap/ploug').then(async r => r.body);
}

async function getAsyncHello() {
  return await getHello();
}

(function(context) {
  const palap = (p: Polop) => console.log(p.palap || lodash.lowerCase(p.polop));

  if ((1 == 1) === true) {
    context.polop = polop;
  } else if ((1 == 1) === true) {
    context.polop = palap
  }

})(window);
