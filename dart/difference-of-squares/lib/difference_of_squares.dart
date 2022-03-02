import 'dart:math';

class DifferenceOfSquares {
  int squareOfSum(int number) {
    var sum = 0;
    for (var i = 1; i <= number; i++) {
      sum += i;
    }

    return pow(sum, 2).toInt();
  }

  int sumOfSquares(int number) {
    var sumSquare = 0;
    for (var i = 1; i <= number; i++) {
      sumSquare += pow(i, 2).toInt();
    }

    return sumSquare;
  }

  int differenceOfSquares(int number) {
    return squareOfSum(number) - sumOfSquares(number);
  }
}
