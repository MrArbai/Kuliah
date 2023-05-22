def replace_vowels(sentence, char1, char2):
    vowels = 'aeiouAEIOU'
    new_sentence = ''

    for char in sentence:
        if char in vowels:
            if char == 'a' or char == 'A':
                new_sentence += char1
            elif char == 'e' or char == 'E':
                new_sentence += char2
            else:
                new_sentence += char
        else:
            new_sentence += char

    return new_sentence



sentence = input("Masukkan kalimat: ")
replacement_char1 = '*'
replacement_char2 = '#'

output_sentence = replace_vowels(sentence, replacement_char1, replacement_char2)
print(output_sentence)
