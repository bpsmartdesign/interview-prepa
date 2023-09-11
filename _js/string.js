
const subLength = (str) => {
  let maxSub = [];
  let tmpSub = [str[0]];

  
  for (let i = 1; i < str.length; i++) {
    if (tmpSub.length > maxSub.length) {
      maxSub = [...tmpSub]
    }

    if (tmpSub.includes(str[i])) {
      maxSub = [...tmpSub];
      tmpSub = [str[i]];
    } else {
      tmpSub.push(str[i]);
    }
  }

  return maxSub.join('')
};
