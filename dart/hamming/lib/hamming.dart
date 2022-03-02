class Hamming {
  int distance(String dna1, String dna2) {
    if (dna1.isEmpty ^ dna2.isEmpty) {
      throw ArgumentError('no strand must be empty');
    }
    if (dna1.length != dna2.length) {
      throw ArgumentError('left and right strands must be of equal length');
    }

    var distance = 0;
    for (var i = 0; i < dna1.length; i++) {
      if (dna1.runes.elementAt(i) != dna2.runes.elementAt(i)) {
        distance++;
      }
    }

    return distance;
  }
}
