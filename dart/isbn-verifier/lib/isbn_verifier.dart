bool isValid(String string) {
  var sum = 0;
  var multiple = 10;

  for (var rune in string.runes) {
    var digit = String.fromCharCode(rune);
    if (digit != '-') {
      if (multiple == 1 && digit == 'X') {
        digit = '10';
      }

      final numericRegex = RegExp(r'^[0-9]+$');
      if (!numericRegex.hasMatch(digit)) {
        return false;
      }

      sum += int.parse(digit) * multiple;
      multiple--;
    }
  }

  return multiple == 0 && sum % 11 == 0;
}
