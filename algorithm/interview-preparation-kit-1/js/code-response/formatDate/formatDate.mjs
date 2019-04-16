function longFormat(date) {
  const months = 'janeiro fevereiro março abril maio junho julho agosto setembro outubro novembro dezembro'.split(
    ' ',
  );
  date = date.split('/');
  if (date.length === 3) {
    date[1] = months[date[1] - 1];
    return date.join(' de ');
  } else {
    return 'Invalid data input';
  }
}

export { longFormat };
