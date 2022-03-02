import 'dart:math';

class ArmstrongNumbers {
  bool isArmstrongNumber(int number) {
    var count = number.toString().length;
    var sum = 0;

    number.toString().runes.forEach((int rune) {
      var digit = String.fromCharCode(rune).toLowerCase();
      sum += pow(int.parse(digit), count).toInt();
    });

    return sum == number;
  }
}