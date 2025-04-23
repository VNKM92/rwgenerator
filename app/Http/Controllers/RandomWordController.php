<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandomWordController extends Controller
{
    /**
     * Generate a random word with given first and last letters, and word size.
     *
     * @param string $firstLetter
     * @param string $lastLetter
     * @param int $size
     * @return string
     */

    public function generateWord(Request $request)
    {
        

        $firstLetter =$request['first_letter']  ??  "";
        $lastLetter =$request['last_letter']  ??  "";
        $size =$request['word_size']  ??  "";
        // Validate input (simple validation for letters and size)
        if (strlen($firstLetter) !== 1 || strlen($lastLetter) !== 1 || !is_numeric($size) || $size < 3) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        // Ensure the letters are uppercase for consistency
        $firstLetter = strtoupper($firstLetter);
        $lastLetter = strtoupper($lastLetter);

        // Initialize the word with the first letter
        $word = $firstLetter;

        // Fill the middle part of the word with random letters
        $alphabet = range('A', 'Z');
        $wordLength = $size - 2; // Exclude the first and last letters
        for ($i = 0; $i < $wordLength; $i++) {
            $word .= $alphabet[array_rand($alphabet)];
        }

        // Append the last letter
        $word .= $lastLetter;

        return response()->json(['word' => $word]);
    }
}
