class SpaceAge {
  var planetRatios = <String, double>{
    'Mercury': 0.2408467,
    'Venus': 0.61519726,
    'Earth': 1,
    'Mars': 1.8808158,
    'Jupiter': 11.862615,
    'Saturn': 29.447498,
    'Uranus': 84.016846,
    'Neptune': 164.79132,
  };

  double age({required String planet, required int seconds}) {
    var earthYears = seconds / 31557600;

    return double.parse((earthYears / (planetRatios[planet] ?? 0)).toStringAsFixed(2));
  }
}
