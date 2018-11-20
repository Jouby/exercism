export const toRna = (dna) => {
    dna = dna.replace(/[^GCTA]/g, 'X');
    if (dna.includes('X')) {
        throw new Error('Invalid input DNA.');
    }
    let chars = {'G':'C','C':'G','T':'A','A':'U'};
    return dna.replace(/[GCTA]/g, m => chars[m]);
};
