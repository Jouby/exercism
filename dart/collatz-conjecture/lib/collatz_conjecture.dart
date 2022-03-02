class CollatzConjecture {
  int steps(num number) {
    if (number <= 0) {
      throw ArgumentError('Only positive numbers are allowed');
    }

    var steps = 0;
    while (number != 1) {
      if (number % 2 == 0) {
        number /= 2;
      } else {
        number = 3 * number + 1;
      }

      steps++;
    }

    return steps;
  }
}
