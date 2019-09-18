require_relative "./hackerrankInString"

describe "Hackerrank In String" do
  context "hackerrank exist in hereiamstackerrank" do
    it "YES" do
      expect(hackerrankInString('hereiamstackerrank')).to eq('YES')
    end
  end    
end

describe "Hackerrank In String" do
  context "hackerrank exist in hackerworld" do
    it "NO" do
      expect(hackerrankInString('hackerworld')).to eq('NO')
    end
  end    
end

describe "Hackerrank In String" do
  context "hackerrank exist in hhaacckkekraraannk" do
    it "YES" do
      expect(hackerrankInString('hhaacckkekraraannk')).to eq('YES')
    end
  end    
end

describe "Hackerrank In String" do
  context "hackerrank exist in rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt" do
    it "NO" do
      expect(hackerrankInString('rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt')).to eq('NO')
    end
  end    
end
