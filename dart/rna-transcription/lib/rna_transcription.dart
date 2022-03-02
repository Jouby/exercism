class RnaTranscription {
  String toRna(String dna) {
    String rna = '';
    dna.runes.forEach((int rune) {
      rna += toRnaCharacter(String.fromCharCode(rune));
    });

    return rna;
  }

  String toRnaCharacter(String character) {
    switch (character) {
      case 'G':
        return 'C';
      case 'C':
        return 'G';
      case 'T':
        return 'A';
      case 'A':
        return 'U';
      default:
        return '';
    }
  }
}
