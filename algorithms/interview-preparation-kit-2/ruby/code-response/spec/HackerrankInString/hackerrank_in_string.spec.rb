require_relative "../../src/HackerrankInString/hackerrank_in_string"

describe "Hackerrank In String" do
  context "hackerrank exist in hereiamstackerrank" do
    it "YES" do
      expect(HackerrankInString.check('hereiamstackerrank')).to eq('YES')
    end
  end    

  context "hackerrank exist in hackerworld" do
    it "NO" do
      expect(HackerrankInString.check('hackerworld')).to eq('NO')
    end
  end    

  context "hackerrank exist in hhaacckkekraraannk" do
    it "YES" do
      expect(HackerrankInString.check('hhaacckkekraraannk')).to eq('YES')
    end
  end    

  context "hackerrank exist in rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt" do
    it "NO" do
      expect(HackerrankInString.check('rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt')).to eq('NO')
    end
  end    
end
