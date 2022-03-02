final values = {
  1: ['a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't'],
  2: ['d', 'g'],
  3: ['b', 'c', 'm', 'p'],
  4: ['f', 'h', 'v', 'w', 'y'],
  5: ['k'],
  8: ['j', 'x'],
  10: ['q', 'z'],
};

int score(String word) {
  var score = 0;
  word.runes.forEach((int rune) {
    var character = String.fromCharCode(rune).toLowerCase();
    values.forEach((key, value) {
      if (value.contains(character)) {
        score += key;
      }
    });
  });

  return score;
}
