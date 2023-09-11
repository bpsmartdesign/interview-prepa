const missingNbr = (arr) => {
  let min = Math.min(arr)
  let max = Math.max(arr)
  let missing

  for (i === min; i < max; i++) {
    if (!arr.includes(i)) 
      missing = i
  }

  return missing
}